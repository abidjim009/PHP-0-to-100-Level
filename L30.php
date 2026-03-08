<!-- empty() -->

<?php
$name = $_POST["name"];

if(empty($name)){
 echo "Name required";
}
?>

<?php
if(!empty($_POST["email"])){
 echo $_POST["email"];
}
?>