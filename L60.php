<!-- Read File Line by Line -->


<?php
$file = fopen("test.txt","r");

while(!feof($file)){
 echo fgets($file);
}

fclose($file);
?>

<?php
$lines = file("test.txt");

foreach($lines as $line){
 echo $line;
}
?>