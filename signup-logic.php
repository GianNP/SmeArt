<?php 
require 'admin/config/database.php';

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // validasi input 
    if (!$firstname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Depan";
    } else if  (!$lastname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Belakang";
    } else if  (!$username) {
        $_SESSION['signup'] = "Mohon masukkan Username";
    } else if  (!$email) {
        $_SESSION['signup'] = "Mohon masukkan Email yang Valid";
    } else if  (!$lastname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Belakang";
    } else if  (!$lastname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Belakang";
    }

} else {
    header( 'location: ' . ROOT_URL . 'register.php');
    die();
}

?>