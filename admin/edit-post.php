<?php
include 'partials/header.php';
?>

</head>
<body>
    
    <section class="form_section">
        <div class="container form_section-container">
            <h1>Edit Post</h1>
        <form action="" enctype="multipart/form-data">
            <input class="placeholder" type="text" placeholder="Title">
            <select>
                <option value="1">Art</option>
                <option value="1">Street</option>
                <option value="1">Fashion</option>
                <option value="1">Nature</option>
                <option value="1">Otomotif</option>
            </select>
            <textarea class="placeholder" rows="10" placeholder="Body"></textarea>
            <div class="form_control1">
                <input type="checkbox" id="is_featured" checked>
                <label style="color: white;" for="is_featured" >Featured</label>
            </div>
            <div class="form_control">
                <label style="color: white;" for="thumbnail">Change Thumbnail</label>
                <input type="file" id="thumbnail">
            </div>
            <button type="submit" class="btn">Update Post</button>
        </form>
    </section>
        </div>

        <?php
include '../partials/footer.php';
?>