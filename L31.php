<!-- Required Field Validation -->

<?php
if(empty($_POST["username"])){
 echo "Username is required";
}
?>

<?php
$name = $_POST["name"];

if($name == ""){
 echo "Enter name";
}
?>