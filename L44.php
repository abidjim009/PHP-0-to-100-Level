<?php
setcookie("user","",time()-3600);
?>

<?php
unset($_COOKIE["user"]);
?>