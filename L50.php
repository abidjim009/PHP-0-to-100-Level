<!-- Basic Login Validation -->

<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

if($user == "admin" && $pass == "1234"){
    echo "Login successful";
}
?>

<?php
if($user != "admin"){
    echo "Invalid user";
}
?>