<!-- Email Validation -->

<?php
$email = $_POST["email"];

if(filter_var($email, FILTER_VALIDATE_EMAIL)){
 echo "Valid email";
}else{
 echo "Invalid email";
}
?>

<?php
$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

if($email){
 echo "Valid";
}
?>