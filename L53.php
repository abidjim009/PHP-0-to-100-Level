<!-- Protect Page (Authentication) -->

<?php
session_start();

if(!isset($_SESSION["user"])){
    echo "Access denied";
}
?>

<?php
session_start();

if(isset($_SESSION["user"])){
    echo "Welcome to dashboard";
}
?>