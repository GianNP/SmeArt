<?php 
session_start();
require 'admin/config/database.php';

if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];

    // Input validation
    if (!$firstname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Depan";
    } else if  (!$lastname) {
        $_SESSION['signup'] = "Mohon masukkan Nama Belakang";
    } else if  (!$username) {
        $_SESSION['signup'] = "Mohon masukkan Username";
    } else if  (!$email) {
        $_SESSION['signup'] = "Mohon masukkan Email yang Valid";
    } else if  (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
        $_SESSION['signup'] = "Mohon isi Password dengan 8 karakter minimal!";
    } else if ($createpassword !== $confirmpassword) {
        $_SESSION['signup'] = "Password tidak sama";
    } else if ($avatar['error'] !== UPLOAD_ERR_OK) {
        $_SESSION['signup'] = "Tolong tambahkan Avatar anda";
    } else {
        // Check if user already exists
        $user_check_query = "SELECT * FROM users WHERE username= '$username' OR email= '$email'";
        $user_check_result = mysqli_query($connection, $user_check_query);
        if (mysqli_num_rows($user_check_result) > 0) {
            $_SESSION['signup'] = "Username atau Email sudah terdaftar";
        } else {
            // Hash the password
            $hashed_password = password_hash($createpassword, PASSWORD_DEFAULT);

            // Prepare avatar upload
            $time = time(); // Get current timestamp
            $avatar_name = $time . '_' . $avatar['name'];
            $avatar_tmp_name = $avatar['tmp_name'];
            $avatar_destination_path = 'img/' . $avatar_name;

            // Allowed file types
            $allowed_files = ['png', 'jpg', 'jpeg', 'heic'];
            $extension = explode('.', $avatar_name);
            $extension = end($extension);

            // Validate file extension and size
            if (in_array($extension, $allowed_files)) {
                if ($avatar['size'] < 1000000) { // 1MB limit
                    move_uploaded_file($avatar_tmp_name, $avatar_destination_path);
                } else {
                    $_SESSION['signup'] = 'Ukuran file melebihi 1MB';
                }
            } else {
                $_SESSION['signup'] = 'Format file tidak valid';
            }

            // Insert new user into database if no errors
            if (!isset($_SESSION['signup'])) {
                $insert_user_query = "INSERT INTO users (firstname, lastname, username, email, password, avatar, is_admin) 
                                      VALUES ('$firstname', '$lastname', '$username', '$email', '$hashed_password', '$avatar_name', 0)";
                $insert_user_result = mysqli_query($connection, $insert_user_query);

                if (!mysqli_errno($connection)) {
                    // Registration success
                    $_SESSION['signup-success'] = "Registrasi Berhasil, mohon Log In!";
                    header('Location: ' . ROOT_URL . 'login.php');
                    die();
                }
            }
        }
    }

    // Redirect back to signup if there are any errors
    if (isset($_SESSION['signup'])) {
        header('Location: ' . ROOT_URL . 'register.php');
        die();
    }

} else {
    // Redirect if the form was not submitted
    header('Location: ' . ROOT_URL . 'register.php');
    die();
}

