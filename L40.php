<!-- Complete Form Example -->

<form method="post">
Name: <input type="text" name="name">
Email: <input type="text" name="email">
<input type="submit">
</form>

<?php
$name = $_POST["name"];
$email = $_POST["email"];

echo $name."<br>".$email;
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
 echo "Form Submitted Successfully";
}
?>