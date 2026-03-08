<!-- Complete File Upload System -->

<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit">
</form>

<?php
$target = "uploads/".basename($_FILES["file"]["name"]);
move_uploaded_file($_FILES["file"]["tmp_name"],$target);

echo "File uploaded";
?>