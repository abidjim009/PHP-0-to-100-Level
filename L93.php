<!-- PDO Insert Data -->

<?php
$sql = "INSERT INTO users(name,email) VALUES('Abid','abid@mail.com')";
$pdo->exec($sql);
?>

<?php
$stmt = $pdo->prepare("INSERT INTO users(name) VALUES(?)");
$stmt->execute(["Rahim"]);
?>