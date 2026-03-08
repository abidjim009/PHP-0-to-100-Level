<!-- Introduction to File Handling -->

<?php
$file = fopen("test.txt","r");
?>

<?php
if(file_exists("test.txt")){
 echo "File exists";
}
?>