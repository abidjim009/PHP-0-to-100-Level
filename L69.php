<!-- Rename Uploaded File -->

<?php
$newname = time().".jpg";
move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$newname);
?>


<?php
$name = uniqid().".png";
?>