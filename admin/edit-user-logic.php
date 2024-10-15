<?php
session_start();
require '../admin/config/database.php'; // Koneksi ke database

if(isset($_POST['submit'])) {
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $is_admin = filter_var($_POST['is_admin'], FILTER_SANITIZE_NUMBER_INT);

    if(!$firstname || !$lastname) {
        header('location: ' . ROOT_URL . 'admin/edit-user.php?id=' . $id . '&error=invalidinput');
        die();
    } else {
        $query = "UPDATE users SET firstname='$firstname', lastname='$lastname', is_admin='$is_admin' WHERE id=$id";
        $result = mysqli_query($connection, $query);

        if($result) {
            header('location: ' . ROOT_URL . 'admin/manage-users.php?success=userupdated');
        } else {
            error_log('MySQL Error: ' . mysqli_error($connection)); // Log the error
            header('location: ' . ROOT_URL . 'admin/edit-user.php?id=' . $id . '&error=updatefailed');
        }
    }
} else {
    header('location: ' . ROOT_URL . 'admin/manage-users.php');
    die();
}
?>
