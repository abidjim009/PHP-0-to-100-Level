<!-- Insert Data Using Form -->

<form method="post">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit">
</form>

<?php
$name = $_POST["name"];
$email = $_POST["email"];

$sql = "INSERT INTO users(name,email) VALUES('$name','$email')";
mysqli_query($conn,$sql);
?>