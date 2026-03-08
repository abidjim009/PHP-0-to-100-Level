
<!-- Append File -->


<?php
$file = fopen("test.txt","a");
fwrite($file," New Line");
fclose($file);
?>

<?php
file_put_contents("test.txt","Another line\n",FILE_APPEND);
?>