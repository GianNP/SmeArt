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
    <?php include 'partials/footer.php'; // Memanggil footer ?>
</footer>
</body>
</html>