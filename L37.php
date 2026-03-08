<!-- Radio Button -->

<form method="post">
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="submit">
</form>

<?php
echo $_POST["gender"];
?>

<?php
if(isset($_POST["gender"])){
 echo "Gender: " . $_POST["gender"];
}
?>