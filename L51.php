<!-- Login Using Session -->

<?php
session_start();

if($user == "admin" && $pass == "1234"){
    $_SESSION["user"] = $user;
}
?>

<?php
session_start();

if(isset($_SESSION["user"])){
    echo "Welcome " . $_SESSION["user"];
}
?>