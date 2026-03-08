<!-- POST Method -->

<form method="post">
Email: <input type="text" name="email">
<input type="submit">
</form>

<?php
echo $_POST["email"];
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "Form submitted";
}
?>