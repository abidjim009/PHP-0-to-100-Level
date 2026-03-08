<!-- JSON in PHP -->

<?php
$data = ["name"=>"Abid","age"=>22];
echo json_encode($data);
?>

<?php
$json = '{"name":"Abid"}';
$data = json_decode($json,true);

echo $data["name"];
?>