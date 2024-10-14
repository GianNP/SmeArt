<?php
require 'config.php'; // Memanggil koneksi database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Mengambil dan memvalidasi input
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $fullname = filter_var(trim($_POST['fullname']), FILTER_SANITIZE_STRING);
    $username = filter_var(trim($_POST['username']), FILTER_SANITIZE_STRING);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT); // Menghash password
    $role = $_POST['role'];

    // Validasi file upload
    $avatar = $_FILES['avatar'];
    $avatarPath = '';
    
    if ($avatar['error'] == 0) {
        // Cek jenis file
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
        if (in_array($avatar['type'], $allowedTypes)) {
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

        // Redirect atau tampilkan pesan sukses
        header("Location: success-page.php"); // Ganti dengan halaman sukses yang Anda inginkan
        exit;

    } catch (PDOException $e) {
        die("Kesalahan saat menambahkan pengguna: " . $e->getMessage());
    }
} else {
    die("Invalid request method.");
}
?>
