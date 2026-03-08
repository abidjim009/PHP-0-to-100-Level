<!-- Display Data in Table -->

<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result)){
 echo "<tr>";
 echo "<td>".$row["name"]."</td>";
 echo "<td>".$row["email"]."</td>";
 echo "</tr>";
}
?>
</table>