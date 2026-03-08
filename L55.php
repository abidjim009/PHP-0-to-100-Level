<!-- Simple Login System Example -->
<?php
session_start();

if($_POST["user"]=="admin" && $_POST["pass"]=="1234"){
    $_SESSION["user"]="admin";
    echo "Login successful";
}
?>

<?php
session_start();

if(isset($_SESSION["user"])){
    echo "Welcome Admin";
}
?>