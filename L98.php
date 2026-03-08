<!-- Simple PHP Project Example -->
 <?php
session_start();

if(!isset($_SESSION["user"])){
 header("Location: login.php");
}
?>

<?php
echo "Welcome to Dashboard";
?> 