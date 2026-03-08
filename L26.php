<!-- Basic HTML Form with PHP -->

<form method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>

<?php
if($_POST){
    echo "Hello " . $_POST["name"];
}
?>

<form method="post">
Age: <input type="number" name="age">
<input type="submit">
</form>

<?php
if(isset($_POST["age"])){
    echo "Your age is " . $_POST["age"];
}
?>