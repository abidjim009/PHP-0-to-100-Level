<!-- Login with Session -->

<?php
session_start();

if(mysqli_num_rows($result)>0){
 $_SESSION["user"] = $user;
}
?>

<?php
session_start();
echo "Welcome ".$_SESSION["user"];
?>