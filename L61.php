<!-- Delete file -->

<?php
unlink("test.txt");
?>

<?php
if(file_exists("old.txt")){
 unlink("old.txt");
}
?>