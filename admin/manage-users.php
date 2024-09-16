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
<body style="background: var(--color-primary-variant) ;">

    <!-- Navbar -->
    <nav>
        <div class="container nav__container">
            <div class="nav__logo">
                <h1 href="index.php">SmeArt</h1>
            </div>
            <ul class="nav__items">
                <li><a href="../blog.php">Blog</a></li>
                <li><a href="../about.php">About</a></li>
                <li><a href="../services.php">Services</a></li>
                <li><a href="../contact.php">Contact</a></li>
                <!-- <li><a href="login.php">Login</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="../img/assets/avatar0.jpg">
                    </div>
                    <ul>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- End Navbar -->



<section class="dashboard">
    <div class="container dashboard_container">
        <button id="show_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-right-b"></i></button>
        <button id="hide_sidebar-btn" class="sidebar_toggle"><i class="uil uil-angle-left-b"></i></button>
        <aside>
            <ul>
                <li>
                    <a style="color: white;" href="add-post.php" ><i class="uil uil-pen"></i><h5 style="color: white;">Add Post</h5></a>
                </li>
                <li>
                    <a style="color: white;" href="dashboard.php" ><i class="uil uil-postcard"></i><h5 style="color: white;">Manage Post</h5></a>
                </li>
                <li>
                    <a style="color: white;" href="add-user.php" ><i class="uil uil-user-plus"></i><h5 style="color: white;">Add User</h5></a>
                </li>
                <li>
                    <a style="color: white;" href="manage-users.php" class="active" ><i class="uil uil-users-alt"></i><h5 style="color: white;">Manage User</h5></a>
                </li>
                <li>
                    <a style="color: white;" href="add-category.php" ><i class="uil uil-edit"></i><h5 style="color: white;">Add Category</h5></a>
                <li>
                    <a style="color: white;" href="manage-categories.php"><i class="uil uil-list-ul"></i><h5 style="color: white;">Manage Categories</h5></a>
                </li>
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
                <table style="color: white;">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Admin</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Giant Naufal</td>
                            <td>giantnp</td>
                            <td><a href="edit-users.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-users.php" class="btn sm danger">Delete</a></td>
                            <td>Yes</td>
                        </tr>
                        <tr>
                            <td>Aquillo Aurele</td>
                            <td>ellotzy</td>
                            <td><a href="edit-users.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-users.php" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>
                        <tr>
                            <td>Fawwaz Abhinaya</td>
                            <td>armroyong</td>
                            <td><a href="edit-users.php" class="btn sm">Edit</a></td>
                            <td><a href="delete-users.php" class="btn sm danger">Delete</a></td>
                            <td>No</td>
                        </tr>
                    </tbody>
                </table>
            </h2>
        </main>
    </div>
</section>


<?php
include '../partials/footer.php';
?>

<script src="../js/main.js"></script>