<!-- Simple REST API -->

<?php
header("Content-Type: application/json");

$data = ["status"=>"success"];
echo json_encode($data);
?>

<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
 echo json_encode(["message"=>"API working"]);
}
?>