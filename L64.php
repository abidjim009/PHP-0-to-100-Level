<!-- List Files in Directory -->

<?php
$files = scandir(".");

print_r($files);
?>

<?php
$folder = "uploads";
$files = scandir($folder);

foreach($files as $file){
 echo $file."<br>";
}
?>  