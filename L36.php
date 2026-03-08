<!-- Checkbox Handling -->

<form method="post">
<input type="checkbox" name="agree"> I Agree
<input type="submit">
</form>

<?php
if(isset($_POST["agree"])){
 echo "Checked";
}
?>

<?php
if(!isset($_POST["agree"])){
 echo "Please accept terms";
}
?>