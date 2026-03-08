<!-- Redirect After Login -->

<?php
header("Location: dashboard.php");
?>

<?php
if(!isset($_SESSION["user"])){
    header("Location: login.php");
}
?>