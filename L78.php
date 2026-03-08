<!-- Update Data -->

<?php
$sql = "UPDATE users SET name='Karim' WHERE id=1";
mysqli_query($conn,$sql);
?>

<?php
$id = 2;
$name = "Hasan";

$sql = "UPDATE users SET name='$name' WHERE id=$id";
?>

