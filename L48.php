<!-- Destroy Session -->

<?php
session_start();
session_destroy();
?>

<?php
session_start();
unset($_SESSION["user"]);
?>