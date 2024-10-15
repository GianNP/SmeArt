<?php
session_start();
require '../admin/config/database.php'; // Koneksi ke database
include 'partials/header.php'; // Memanggil header

if(isset($_GET['id'])) {
    $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    $query = "SELECT * FROM users WHERE id=$id";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_array($result);
    } else {
        header('location: ' . ROOT_URL . 'admin/manage-users.php');
        die();
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-users.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User | SmeArt</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<section class="form_section">
    <div class="container form_section-container">
        <h1>Edit User</h1>
        <form action="<?php echo ROOT_URL; ?>admin/edit-user-logic.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <input type="text" value="<?= $user['firstname'] ?>" name="firstname" placeholder="Nama Depan" required>
            <input type="text" value="<?= $user['lastname'] ?>" name="lastname" placeholder="Nama Belakang" required>
            <label for="role" style="color:white;">User Role</label>
            <select name="is_admin">
                <option value="0" <?= $user['is_admin'] == 0 ? 'selected' : '' ?>>Author</option>
                <option value="1" <?= $user['is_admin'] == 1 ? 'selected' : '' ?>>Admin</option>
            </select>
            <button class="btn" type="submit" name="submit">Update User</button>
        </form>
    </div>
</section>

<footer>
    <?php include 'partials/footer.php'; // Memanggil footer ?>
</footer>

<script src="../js/main.js"></script>
</body>
</html>
