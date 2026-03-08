<!-- Select Dropdown -->

<form method="post">
<select name="city">
<option>Dhaka</option>
<option>Rajshahi</option>
</select>
<input type="submit">
</form>

<?php
echo $_POST["city"];
?>

<?php
if(isset($_POST["city"])){
 echo "Selected: ".$_POST["city"];
}
?>