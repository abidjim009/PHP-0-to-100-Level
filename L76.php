<!-- Select Data -->

<?php
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
?>

<?php
while($row = mysqli_fetch_assoc($result)){
    echo $row["name"];
}
?>