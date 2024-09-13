<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | SmeArt</title>
    <!-- CSS -->
     <link rel="stylesheet" href="style.css">
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
            </div>
            <ul class="nav__items">
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="login.php">Login</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="img/assets/avatar0.jpg">
                    </div>
                    <ul>
                        <li><a href="/SmeArt/admin/dashboard.php">Dashboard</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Features -->
     <section class="featured">
        <div class="container featured__container">
            <div class="post__thumbnail">
                <img src="img/assets/blog3.jpg">
            </div>
            <div class="post__info">
                <a href="category-posts.php" class="category__button">Wild Life</a>
                <h2 class="post__title"><a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a></h2>
                <p class="post__body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <div class="post__author">
                    <div class="post__author-avatar">
                        <img src="img/assets/avatar2.jpg">
                    </div>
                    <div class="post__author-info">
                        <h5>By : Aquillo Voldemort</h5>
                        <small>27 Agustus, 2024 - 10:00</small>
                    </div>
                </div>
            </div>
        </div>  
     </section>
     <!-- Features End -->


     <section class="posts">
        <div class="container posts__container">
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog2.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar3.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog3.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar4.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog4.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar5.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog5.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar6.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog6.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar8.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog7.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar9.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog8.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar10.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog9.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar11.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
            <article class="posts">
                <div class="post__thumbnail">
                    <img src="img/assets/blog10.jpg">
                </div>
                <div class="post__info">
                    <a href="category-posts.php" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.php">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</a>
                    </h3>    
                    <p class="post__body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="img/assets/avatar12.jpg">
                        </div>
                        <div class="post__author-info">
                            <h5>By : Cahya Eleonore</h5>
                            <small>27 Agustus, 2024 - 10:00</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
     </section>
     <!-- End Post -->

     <!-- Category -->
    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button">Art</a>
            <a href="" class="category__button">Wild Life</a>
            <a href="" class="category__button">Travel</a>
            <a href="" class="category__button">Science & Technology</a>
            <a href="" class="category__button">Food</a>
            <a href="" class="category__button">Music</a>
        </div>
    </section>
    <!-- End Category -->

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

    <script src="js/main.js"></script>
</body>
</html>