<!-- Read File -->

<?php
$file = fopen("test.txt","r");
echo fread($file,filesize("test.txt"));
fclose($file);
?>

<?php
echo file_get_contents("test.txt");
?>