<!-- PHP Security (SQL Injection Protection) -->

<?php
$stmt = $pdo->prepare("SELECT * FROM users WHERE name=?");
$stmt->execute([$name]);
?>

<?php
$name = htmlspecialchars($_POST["name"]);
?>