<!-- Simple Login Form -->

<form method="post">
Username: <input type="text" name="user">
Password: <input type="password" name="pass">
<input type="submit">
</form>

<?php
if(isset($_POST["user"])){
    echo "Login attempt";
}
?>