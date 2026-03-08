<!-- Access Session -->

<?php
session_start();
echo $_SESSION["user"];
?>


<?php
session_start();
if(isset($_SESSION["user"])){
    echo "Logged in";
}
?>
