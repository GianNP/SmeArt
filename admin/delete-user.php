<?php 
require '../admin/config/database.php';

if (isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);

    // Ambil data user berdasarkan ID
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_array($result);

    // Jika data user ditemukan
    if (mysqli_num_rows($result) == 1) {
        // Ambil nama file avatar
        $avatar_name = $user['avatar'];
        $avatar_path = '../images/' . $avatar_name;

        // Hapus file avatar jika ada
        if ($avatar_name && file_exists($avatar_path)) {
            unlink($avatar_path); // Menghapus file avatar
        }

        // Hapus user dari database
        $delete_query = "DELETE FROM users WHERE id=$id";
        $delete_result = mysqli_query($connection, $delete_query);

        if ($delete_result) {
            // Jika user berhasil dihapus, arahkan ke halaman daftar user dengan pesan sukses
            header("Location: manage-users.php?message=User berhasil dihapus");
            exit();
        } else {
            // Jika ada kesalahan dalam penghapusan
            echo "Terjadi kesalahan saat menghapus user: " . mysqli_error($connection);
        }
    } else {
        // Jika user tidak ditemukan
        echo "User tidak ditemukan.";
    }
} else {
    // Jika parameter ID tidak ada
    echo "ID user tidak valid.";
}

?>
