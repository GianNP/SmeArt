
<footer>
    <div class="footer__socials">
        <a href="#" target="_blank"><i class="uil uil-youtube"></i></a>
        <a href="https://www.instagram.com/giant.np/" target="_blank"><i class="uil uil-instagram-alt"></i></a>
        <a href="#" target="_blank"><i class="uil uil-linkedin"></i></a> 
        <a href="" target="_blank"><i class="uil uil-facebook-f"></i></a> 
    </div>
    <div class="container footer__container">
        <article>
            <h4>Categotries</h4>
            <ul>
            <?php 
        $all_categories_query="SELECT * FROM categories ";
        $all_categories_result=mysqli_query($connection,$all_categories_query);

        ?>
        <?php while ( $category=mysqli_fetch_assoc($all_categories_result) ) : ?>
                <li><a href="<?=ROOT_URL?>category-posts.php?id=<?=$category['id']?>"><?=$category['title']?></a></li>
        <?php endwhile?>
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
                <li><a href="">Food</a></li>
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
            <h4>PermaLinks</h4>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="contact.php">Contact</a></li>
                
            </ul>
        </article>
    </div>

    <div class="footer__copyright">
        <small>Copyright &copy; SmeArt</small>
    </div>
  </footer>



  <script src="<?= ROOT_URL ?>js/main.js"></script>
</body>
</html>


