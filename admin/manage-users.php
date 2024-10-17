<?php
// Mulai session
session_start();
include 'partials/header.php';
require '../admin/config/database.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users | SmeArt</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<section class="dashboard">
    <div class="container dashboard_container">
        <aside>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="manage-users.php" class="active">Manage Users</a></li>
            </ul>
        </aside>
        <main>
            <h2>Manage Users</h2>
            <table>
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
                    <?php
                    // Ambil data pengguna dari database
                    $query = "SELECT * FROM users";
                    $result = mysqli_query($connection, $query);

                    if (mysqli_num_rows($result) > 0): 
                        while ($user = mysqli_fetch_assoc($result)): ?>
                            <tr>
                            <td><?= "{$user['firstname']} {$user['lastname']}" ?></td>
                            <td><?= $user['username'] ?></td>
                            <td><a href="<?= ROOT_URL ?>admin/edit-user.php?id=<?= $user['id'] ?>" class="btn sm">Edit</a></td>
                            <td><a href="<?= ROOT_URL ?>admin/delete-user.php?id=<?= $user['id'] ?>" class="btn sm danger">Delete</a></td>
                                <td><?= $user['is_admin'] ? 'Yes' : 'No' ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5">No users found</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </main>
    </div>
</section>
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
                    <li><a href="">Science & Technology</a></li>
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
                <h4>Menu</h4>
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
</body>
</html>