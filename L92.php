<!-- PDO Database Connection -->

<?php
$pdo = new PDO("mysql:host=localhost;dbname=testdb","root","");
echo "Connected";
?>

<?php
try{
 $pdo = new PDO("mysql:host=localhost;dbname=testdb","root","");
}catch(PDOException $e){
 echo $e->getMessage();
}
?>