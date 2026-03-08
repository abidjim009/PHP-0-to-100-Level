<!-- Create Table -->

<?php
$sql = "CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
email VARCHAR(50)
)";

mysqli_query($conn,$sql);
?>

<?php
$sql = "CREATE TABLE students(
id INT PRIMARY KEY,
name VARCHAR(50)
)";
?>