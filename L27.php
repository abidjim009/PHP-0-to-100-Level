<!-- GET Method -->

<form method="get">
Name: <input type="text" name="name">
<input type="submit">
</form>

<?php
if(isset($_GET["name"])){
    echo $_GET["name"];
}
?>

<?php
echo $_GET["city"];
?>