<?php
session_start();
if($_SESSION["usernm"]=="")
header("Location:index.php");
include("DCon.php");
$sql="select * from course";
$result=mysqli_query($con,$sql);
?>
<h3 align="center">Courses List</h3>
<table border="1" align="center">
<tr>
<td>SL NO</td>
<td>COURSE ID</td>
<td>COURSE NAME</td>
<td>Action</td>
</tr>
<?php
$ctr=1;
while($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
?>
<tr>
<td><?php echo $ctr; ?></td>
<td><?php echo $rec["courseid"]; ?></td>
<td><?php echo $rec["coursename"]; ?></td>
<td>
<a href="mytrick.php?mych=2&cid=<?php echo $rec['courseid'];?>">
<img src="del.png" width="20" height="20" border="0" align="center">
</a>
<a href="frmdb11.php?cid=<?php echo $rec['courseid'];?>">
<img src="edit.png" width="20" height="20" border="0" align="center">
</a>
</td>
</tr>
<?php
$ctr++;
}
?>
</table>