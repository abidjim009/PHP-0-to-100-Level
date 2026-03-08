<!-- isset() -->

<?php
if(isset($_POST["name"])){
 echo "Name received";
}
?>

<?php
$name = isset($_POST["name"]) ? $_POST["name"] : "";
echo $name;
?>