<!-- Password Validation -->

<?php
$password = $_POST["pass"];

if(strlen($password) < 6){
 echo "Password too short";
}
?>

<?php
if(strlen($_POST["pass"]) >= 8){
 echo "Strong password";
}
?>