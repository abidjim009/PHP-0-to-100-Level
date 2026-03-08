<!-- File Type Validation -->

<?php
$type = $_FILES["file"]["type"];

if($type == "image/jpeg"){
 echo "JPEG image";
}
?>

<?php
$ext = pathinfo($_FILES["file"]["name"],PATHINFO_EXTENSION);

if($ext == "png"){
 echo "PNG allowed";
}
?>