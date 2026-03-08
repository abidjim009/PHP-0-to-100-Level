<!-- Insert Data -->

<?php
$sql = "INSERT INTO users(name,email)
VALUES('Abid','abid@mail.com')";

mysqli_query($conn,$sql);
?>

<?php
$name = "Rahim";
$email = "rahim@mail.com";

$sql = "INSERT INTO users(name,email) VALUES('$name','$email')";
?>