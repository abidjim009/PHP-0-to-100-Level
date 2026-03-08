<!-- Simple Login System with Database -->

<form method="post">
Username: <input type="text" name="user">
Password: <input type="password" name="pass">
<input type="submit">
</form>

<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

$sql = "SELECT * FROM users WHERE name='$user' AND password='$pass'";
$result = mysqli_query($conn,$sql);
?>