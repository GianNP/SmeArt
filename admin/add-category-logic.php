<?php
// Menghubungkan dengan database
require '../admin/config/database.php';

// Memulai sesi untuk menampilkan pesan sukses/gagal
session_start();

// Mengecek apakah form sudah di-submit
if (isset($_POST['submit'])) {
    // Mengambil data dari form dan memfilter untuk menghindari injeksi
    $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);

    // Validasi input (pastikan title dan description diisi)
    if (empty($title) || empty($description)) {
        $_SESSION['message'] = "Both title and description are required!";
    } else {
        // Menyiapkan query untuk memasukkan data ke dalam database
        $query = "INSERT INTO categories (title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($connection, $query);

        // Cek apakah query berhasil dijalankan
        if ($result) {
            // Redirect ke halaman manage categories dengan pesan sukses
            $_SESSION['message'] = "Category added successfully!";
            header('Location: manage-categories.php');
            exit();
        } else {
            // Jika gagal menambahkan kategori
            $_SESSION['message'] = "Failed to add category";
        }
    }
} else {
    // Jika form tidak disubmit, redirect ke halaman form
    header('Location: add-category.php');
    exit();
}
?>
