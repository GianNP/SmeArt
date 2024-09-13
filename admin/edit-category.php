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
                <h1 href="index.php">SmeArt</h1>
            </div>
            <ul class="nav__items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
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

</head>
<body>
    
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Edit Category</h1>
        <form action="">
            <input class="placeholder" type="text" placeholder="Title">
            <textarea class="placeholder" rows="4" placeholder="Description"></textarea>
            <button type="submit" class="btn">Update Category</button>
        </form>
    </section>
        </div>

<footer>
        <div class="footer__socials">
            <a href="#" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="#" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="#" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
        <article>
            <h4>Kategori</h4>
            <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Wild Life</a></li>
                <li><a href="">Travel</a></li>
                <li><a href="">Music</a></li>
                <li><a href="">Science $ Technology</a></li>
                <li><a href="">Food</a></li>
            </ul>
        </article>
        <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Kategori</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; SMKN 1 WONOSOBO</small>
        </div>
    </footer>

    <script src="../js/main.js"></script>
</body>
</html>