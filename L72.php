<!-- Check Database Connection -->

<?php
$conn = mysqli_connect("localhost","root","","testdb");

if($conn){
    echo "Connected successfully";
}
?>

<?php
if(mysqli_connect_errno()){
    echo "Failed to connect";
}
?>