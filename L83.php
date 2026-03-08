<!-- Check Login Result -->

<?php
if(mysqli_num_rows($result) > 0){
 echo "Login successful";
}
else{
 echo "Invalid login";
}
?>

