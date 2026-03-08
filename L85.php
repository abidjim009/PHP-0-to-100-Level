<!-- Secure Login (Password Hash) -->

<?php
$hash = password_hash("1234", PASSWORD_DEFAULT);
?>

<?php
if(password_verify($pass,$hash)){
 echo "Password correct";
}
?>