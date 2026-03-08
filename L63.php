<!-- Remove Directory -->

<?php
rmdir("files");
?>

<?php
if(is_dir("data")){
 rmdir("data");
}
?>