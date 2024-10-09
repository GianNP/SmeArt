<?php 
require 'admin/config/constants.php';

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}
?>