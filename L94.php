<!-- PDO Select Data -->

<?php
$stmt = $pdo->query("SELECT * FROM users");

foreach($stmt as $row){
 echo $row["name"];
}
?>

<?php
$stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
$stmt->execute([1]);
?>