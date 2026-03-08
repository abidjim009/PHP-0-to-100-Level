<!-- Logout System -->

<?php
session_start();
session_destroy();
echo "Logged out";
?>

<?php
session_start();
unset($_SESSION["user"]);
?>