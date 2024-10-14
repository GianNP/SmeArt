<?php
session_start(); // Memulai sesi untuk menggunakan $_SESSION
require 'admin/config/database.php'; // Memanggil file koneksi ke database

// Memeriksa apakah form login disubmit
if (isset($_POST['submit'])) {
    // Menangkap dan membersihkan input dari form
    $username_or_email = filter_var($_POST['username_or_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Validasi input
    if (!$username_or_email) {
        $_SESSION['login'] = "Mohon masukkan Username atau Email"; // Cek jika input kosong
    } else if (!$password) {
        $_SESSION['login'] = "Mohon masukkan Password"; // Cek jika Password kosong
    } else {
        // Mencari pengguna di database berdasarkan username atau email
        $login_query = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = mysqli_prepare($connection, $login_query); // Mempersiapkan statement
        mysqli_stmt_bind_param($stmt, 'ss', $username_or_email, $username_or_email); // Mengikat parameter
        mysqli_stmt_execute($stmt); // Menjalankan statement
        $login_result = mysqli_stmt_get_result($stmt); // Mendapatkan hasil eksekusi

        // Jika pengguna ditemukan
        if (mysqli_num_rows($login_result) === 1) {
            $user = mysqli_fetch_assoc($login_result); // Mengambil data pengguna

            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set session untuk pengguna yang login
                $_SESSION['user_id'] = $user['id']; // Menyimpan ID pengguna
                $_SESSION['user_name'] = $user['username']; // Menyimpan username
                $_SESSION['login-success'] = "Login berhasil, Selamat Datang " . $user['firstname'] . "!"; // Pesan sukses
                
                session_write_close(); // Tutup session sebelum redirect
                header('Location: ' . ROOT_URL . 'index.php'); // Arahkan ke halaman utama setelah login
                die(); // Menghentikan eksekusi
            } else {
                $_SESSION['login'] = "Password salah"; // Jika password tidak cocok
                session_write_close(); // Tutup session sebelum redirect
                header('Location: ' . ROOT_URL . 'login.php');
                die();
            }
        }
    }

    // Arahkan kembali ke halaman login jika ada error
    header('Location: ' . ROOT_URL . 'login.php'); 
    die(); // Menghentikan eksekusi
} else {
    // Arahkan ke halaman login jika form tidak di-submit
    header('Location: ' . ROOT_URL . 'login.php'); 
    die(); // Menghentikan eksekusi
}
?>
