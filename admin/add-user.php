<?php
<<<<<<< HEAD
include "partials/header.php";
if(!isset($_SESSION['user_is_admin'])){
    header("location: " . ROOT_URL . "logout.php");
    //destroy all sessions and redirect user to login page
    session_destroy();
}
//get beck form DATA IF THERE IS A REGISTRATION ERROR
$firstname=$_SESSION['add-user-data']['firstname'] ?? null;
$lastname=$_SESSION['add-user-data']['lastname'] ?? null;
$username=$_SESSION['add-user-data']['username'] ?? null;
$email=$_SESSION['add-user-data']['email'] ?? null;
$createpassword=$_SESSION['add-user-data']['createpassword'] ?? null;
$confirmpassword = $_SESSION['add-user-data']['confirmpassword'] ?? null;

//delete add-user data session
unset($_SESSION['add-user-data']);


?>


<section class="form__section">
    <div class="container form__section-container">
        <h2>Add User</h2>
               
        <?php if(isset($_SESSION['add-user-success'])): ?>
        
        <div class="alert__message success">
            <p>
                <?=$_SESSION['add-user-success'];
                unset($_SESSION['add-user-success']); 
                ?>
            </p>
        </div>

        
        <?php elseif(isset($_SESSION['add-user'])): ?>
        
        <div class="alert__message error">
            <p>
                <?=$_SESSION['add-user'];
                unset($_SESSION['add-user']); 
                ?>
            </p>
        </div>

        <?php endif ?>


        <form action="<?=ROOT_URL?>admin/add-user-logic.php" enctype="multipart/form-data" method='POST'>
            <input type="text"     name ="firstname"       value ="<?= $firstname?>"  placeholder="First Name">
            <input type="text"     name ="lastname"        value ="<?= $lastname?>"  placeholder="Last Name">
            <input type="username" name ="username"        value ="<?= $username      ?>"  placeholder="Username">
            <input type="email"    name ="email"           value ="<?= $email          ?>"  placeholder="email">
            <input type="password" name ="createpassword"  value ="<?= $createpassword ?>"  placeholder="Password">
            <input type="password" name ="confirmpassword" value ="<?= $confirmpassword?>"  placeholder="Confirm Password">
             <select name='userrole'>

                <option value="0">Author</option>
                <option value="1">Admin</option>

            </select>
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" name ='avatar' id="avatar">
=======
include 'partials/header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | SmeArt</title>
    <!-- CSS -->
     <link rel="stylesheet" href="../style.css">
    <!-- Iconscout -->
     <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
     <!-- Poppins Font -->
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="container nav__container">
            <div class="nav__logo">
                <h1>SmeArt</h1>
>>>>>>> df0652c7625ef398702bc0c16b572b205dbf29b0
            </div>
            <button type="submit" name='submit' class="btn">Add User</button>
        </form>
    </div>
</section>


<<<<<<< HEAD
=======
</head>
<body>
    
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Add User</h1>
        <div class="alert_message error">
            <p>This in an error message</p>
        </div>
        <form action="<? ROOT_URL ?>add-user-logic.php" method="post" enctype="multipart.form-data">
            <input type="text" name="fullname" placeholder="Nama lengkap" required>
            <input type="email" name="email" placeholder="Mobile Number atau Email" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
        <label style="color: white;" for="role">User Role</label>
        <select name="userrole">
            <option value="0">Author</option>
            <option value="1">Admin</option>
        </select>
        <div class="form_control">
            <label style="color: white;" for="avatar">User Avatar</label>
            <input type="file" id="avatar" name="avatar">
        </div>
        <button class="btn" type="submit" name="submit">Add User</button>
    </form>
    </section>
        </div>
>>>>>>> df0652c7625ef398702bc0c16b572b205dbf29b0



<?php
include '../partials/footer.php';
?>