<!-- Delete Data -->

<?php
$sql = "DELETE FROM users WHERE id=1";
mysqli_query($conn,$sql);
?>

<?php
$id = 3;

$sql = "DELETE FROM users WHERE id=$id";
?>