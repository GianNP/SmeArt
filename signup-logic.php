<?php 
require '../SmeArt/admin/config/database.php'


if (isset($_POST['submit'])) {

} else {
    header('location: ' . ROOT_URL . 'signup.php');
    die();
}
?>