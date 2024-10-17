<?php
require 'admin/config/database.php'; // Memanggil koneksi database

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil dan memvalidasi input
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $firstname = filter_var(trim($_POST['firstname']), FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
    $fullname = $firstname . ' ' . $lastname; // Menggabungkan nama depan dan belakang
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Menghash password
    $role = $_POST['role'];

    // Validasi input kosong
    if (empty($email) || empty($firstname) || empty($lastname) || empty($username) || empty($password)) {
        $errorMessage = "Semua field wajib diisi.";
        include 'add-user.php';  // Redirect ke form dengan pesan error
        exit;
    }

    // Validasi file upload
    $avatar = $_FILES['avatar'];
    $avatarPath = '';
    
    if ($avatar['error'] == 0) {
        // Cek jenis file
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($avatar['type'], $allowedTypes)) {
            // Cek ukuran file (maksimal 500KB)
            if ($avatar['size'] > 500000) {
                die("Ukuran file terlalu besar. Maksimal 500KB.");
            }

            $avatarPath = 'uploads/' . basename($avatar['name']);
            move_uploaded_file($avatar['tmp_name'], $avatarPath); // Pindahkan file ke folder uploads
        } else {
            die("Format gambar tidak valid. Hanya JPEG, PNG, dan GIF yang diperbolehkan.");
        }
    }

    // Menyimpan data pengguna ke database
    try {
        $stmt = $pdo->prepare("INSERT INTO users (email, fullname, username, password, role, avatar) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$email, $fullname, $username, $password, $role, $avatarPath]);

        // Redirect dengan pesan sukses
        $_SESSION['success'] = 'Pengguna berhasil ditambahkan!';
        header("Location: success-page.php"); // Ganti dengan halaman sukses yang Anda inginkan
        exit;

    } catch (PDOException $e) {
        die("Kesalahan saat menambahkan pengguna: " . $e->getMessage());
    }
} else {
    die("Invalid request method.");
}
