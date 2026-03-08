<!-- Input Sanitization -->

<?php
$name = htmlspecialchars($_POST["name"]);
echo $name;
?>

<?php
$email = filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL);
echo $email;
?>