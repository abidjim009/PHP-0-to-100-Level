<!-- Write File -->

<?php
$file = fopen("test.txt","w");
fwrite($file,"Hello PHP");
fclose($file);
?>

<?php
file_put_contents("test.txt","Welcome to PHP");
?>

