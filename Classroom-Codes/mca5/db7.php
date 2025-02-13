<?php
$con=mysqli_connect("localhost","root","","pro1");
$sql="select * from course";
$result=mysqli_query($con,$sql);
?>
<table border="1">
<?php
while($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
?>
<tr>
<td><?php echo $rec["courseid"]; ?></td>
<td><?php echo $rec["coursename"]; ?></td>
</tr>
<?php
}
?>
</table>