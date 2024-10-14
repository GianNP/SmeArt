<?php 
session_start(); // Memulai sesi untuk menggunakan $_SESSION
require 'admin/config/database.php'; // Memanggil file koneksi ke database

// Cek apakah form di-submit
if (isset($_POST['submit'])) {
    // Menangkap dan membersihkan input dari form
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // Validasi input dari form
    if (!$firstname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Depan"; // Error jika Nama Depan kosong
    } else if (!$lastname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Belakang"; // Error jika Nama Belakang kosong
    } else if (!$username) {
        $_SESSION['signup'] = "Mohon masukkan Username"; // Error jika Username kosong
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['signup'] = "Mohon masukkan Email yang Valid"; // Error jika Email tidak valid
    } else if (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Password harus minimal 8 karakter"; // Error jika Password kurang dari 8 karakter
    } else if ($createpassword !== $confirmpassword) {
        $_SESSION['signup'] = "Password dan Confirm Password tidak sama"; // Error jika Password dan Confirm Password tidak sama
    } else if ($avatar['error'] !== UPLOAD_ERR_OK) {
        $_SESSION['signup'] = "Mohon tambahkan Avatar anda"; // Error jika avatar belum di-upload
    } else {
        // Cek apakah username atau email sudah ada di database
        $user_check_query = "SELECT * FROM users WHERE username= ? OR email= ?";
        $stmt = mysqli_prepare($connection, $user_check_query);
        mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
        mysqli_stmt_execute($stmt);
        $user_check_result = mysqli_stmt_get_result($stmt);
        
        if (mysqli_num_rows($user_check_result) > 0) {
            $_SESSION['signup'] = "Username atau Email sudah terdaftar"; // Error jika username atau email sudah terdaftar
        } else {
            // Hash password untuk keamanan
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // Proses upload avatar
            $time = time(); 
            $avatar_name = $time . '_' . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'img/' . $avatar_name;

            // Jenis file yang diizinkan
            $allowed_files = ['png', 'jpg', 'jpeg', 'heic'];
            $extension = pathinfo($avatar_name, PATHINFO_EXTENSION);

            // Validasi format dan ukuran file avatar
            if (in_array(strtolower($extension), $allowed_files)) {
                if ($avatar['size'] < 10000000) { 
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path); 
                } else {
                    $_SESSION['signup'] = 'Ukuran file melebihi 10MB'; // Error jika file lebih dari 10MB
                }
            } else {
                $_SESSION['signup'] = 'Format file tidak valid'; // Error jika format file tidak sesuai
            }

            // Insert data user ke database jika semua validasi berhasil
            if (!isset($_SESSION['signup'])) {
                $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) 
                                      VALUES (?, ?, ?, ?, ?, ?, 0)";
                $stmt = mysqli_prepare($connection, $insert_user_query);
                mysqli_stmt_bind_param($stmt, 'ssssss', $firstname, $lastname, $username, $email, $hashed_password, $avatar_name);
                $insert_user_result = mysqli_stmt_execute($stmt);

                if (!mysqli_stmt_errno($stmt)) {
                    // Sukses membuat user
                    $_SESSION['signup-success'] = "Registrasi Berhasil, mohon Log In!";
                    header('Location: ' . ROOT_URL . 'login.php');
                    die();
                } else {
                    $_SESSION['signup'] = "Ada kesalahan, mohon coba lagi."; // Error pada proses penyimpanan database
                }
            }
        }
    }

    // Redirect ke halaman registrasi jika terjadi error
    if (isset($_SESSION['signup'])) {
        header('Location: ' . ROOT_URL . 'register.php');
        die();
    }

} else {
    // Redirect ke halaman registrasi jika form tidak di-submit
    header('Location: ' . ROOT_URL . 'register.php');
    die();
}
