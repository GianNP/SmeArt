<?php
include 'partials/header.php';
?>

</head>
<body>
    
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Edit User</h1>
        <form action="#" method="post" enctype="multipart.form-data">
        <input type="text" name="fullname" placeholder="Nama lengkap" required>
        <input type="text" name="username" placeholder="Username" required>
        <label style="color: white;" for="role">User Role</label>
        <select>
            <option value="0">Author</option>
            <option value="1">Admin</option>
        </select>
        <button class="btn" type="submit">Update User</button>
    </form>
    </section>
        </div>

        <?php
include '../partials/footer.php';
?>