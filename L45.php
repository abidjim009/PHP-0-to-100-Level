<!-- Introduction to Sessions -->

<?php
session_start();
$_SESSION["user"] = "Abid";
?>

<?php
session_start();
echo "Session created";
?>