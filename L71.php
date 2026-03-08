<!-- MySQL Database Connection -->

<?php
$conn = mysqli_connect("localhost","root","","testdb");

if(!$conn){
    echo "Connection failed";
}
?>

<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "testdb";

$conn = mysqli_connect($server,$user,$password,$db);
?>