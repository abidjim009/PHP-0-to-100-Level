<!-- File Size Validation -->

<?php
if($_FILES["file"]["size"] > 2000000){
 echo "File too large";
}
?>

<?php
if($_FILES["file"]["size"] < 1000000){
 echo "File accepted";
}
?>