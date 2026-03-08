<!-- Number Validation -->

<?php
$age = $_POST["age"];

if(is_numeric($age)){
 echo "Valid number";
}
?>

<?php
$number = filter_var($_POST["num"], FILTER_VALIDATE_INT);

if($number){
 echo "Integer";
}
?>