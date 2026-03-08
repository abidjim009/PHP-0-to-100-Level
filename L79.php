<!-- Update Data Using Form -->

<form method="post">
ID: <input type="text" name="id">
Name: <input type="text" name="name">
<input type="submit">
</form>

<?php
$id = $_POST["id"];
$name = $_POST["name"];

$sql = "UPDATE users SET name='$name' WHERE id=$id";
mysqli_query($conn,$sql);
?>