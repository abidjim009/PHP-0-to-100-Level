<!-- Delete Using Link -->

<a href="delete.php?id=1">Delete</a>

<?php
$id = $_GET["id"];
$sql = "DELETE FROM users WHERE id=$id";
mysqli_query($conn,$sql);
?>