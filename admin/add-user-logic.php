<?php
session_start(); // Memulai sesi untuk menggunakan $_SESSION
require 'admin/config/database.php'; // Memanggil file koneksi ke database

// Memeriksa apakah form disubmit
if (isset($_POST['email'], $_POST['fullname'], $_POST['username'], $_POST['password'], $_POST['role'])) {
    // Menangkap dan membersihkan input dari form
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $role = filter_var($_POST['role'], FILTER_SANITIZE_NUMBER_INT);

    // Validasi input
    if (!$email || !$fullname || !$username || !$password) {
        $_SESSION['add_user'] = "Semua field harus diisi"; // Pesan error jika ada field yang kosong
        header('Location: add-user.php'); // Arahkan kembali ke form
        die();
    }

    // Cek apakah username atau email sudah ada
    $check_query = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($connection, $check_query);
    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
    mysqli_stmt_execute($stmt);
    $check_result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($check_result) > 0) {
        $_SESSION['add_user'] = "Username atau email sudah terdaftar"; // Pesan error jika sudah ada
        header('Location: add-user.php'); // Arahkan kembali ke form
        die();
    }

    // Enkripsi password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Query untuk menambahkan pengguna baru
    $add_query = "INSERT INTO users (email, fullname, username, password, role) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($connection, $add_query);
    mysqli_stmt_bind_param($stmt, 'ssssi', $email, $fullname, $username, $hashed_password, $role);
    $execute_result = mysqli_stmt_execute($stmt);

    if ($execute_result) {
        $_SESSION['add_user'] = "Pengguna berhasil ditambahkan"; // Pesan sukses
    } else {
        $_SESSION['add_user'] = "Gagal menambahkan pengguna"; // Pesan error
    }

    // Arahkan kembali ke form setelah selesai
    header('Location: add-user.php');
    die();
} else {
    // Arahkan ke halaman sebelumnya jika tidak ada data yang dikirim
    header('Location: add-user.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User | SmeArt</title>
    <link rel="stylesheet" href="../style.css"> <!-- Gaya CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"> <!-- Iconscout -->
</head>
<body>
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Add User</h1>

            <!-- Menampilkan Notifikasi -->
            <?php if (isset($_SESSION['add_user'])): ?>
                <div class="alert_message <?= strpos($_SESSION['add_user'], 'berhasil') !== false ? 'success' : 'error' ?>">
                    <p><?= $_SESSION['add_user']; ?></p>
                    <?php unset($_SESSION['add_user']); // Menghapus notifikasi setelah ditampilkan ?>
                </div>
            <?php endif; ?>

            <form action="add-user.php" method="post" enctype="multipart/form-data">
                <input type="email" name="email" placeholder="Mobile Number atau Email" required>
                <input type="text" name="fullname" placeholder="Nama lengkap" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <label style="color: white;" for="role">User Role</label>
                <select name="role" required>
                    <option value="0">Author</option>
                    <option value="1">Admin</option>
                </select>
                <div class="form_control">
                    <label style="color: white;" for="avatar">User Avatar</label>
                    <input type="file" id="avatar" name="avatar" required>
                </div>
                <button class="btn" type="submit">Add User</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="footer__copyright">
            <small>Copyright &copy; SMKN 1 WONOSOBO</small>
        </div>
    </footer>
    
    <script src="../js/main.js"></script>
</body>
</html>
