<!-- Access Cookie -->

<?php
echo $_COOKIE["user"];
?>


<?php
if(isset($_COOKIE["user"])){
    echo "Welcome " . $_COOKIE["user"];
}
?>