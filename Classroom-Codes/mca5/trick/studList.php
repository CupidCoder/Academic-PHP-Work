<?php
session_start();
if($_SESSION["usernm"]=="")
header("Location:index.php");
include("DCon.php");
//$sql="select * from student, course where student.courseid=course.courseid order by coursename,sname";
$sql="select * from student s, course c where s.courseid=c.courseid order by c.coursename,sname";
$result=mysqli_query($con,$sql);
?>
<h3 align="center">Students List</h3>
<table border="1" align="center">
<tr>
<td>SL NO</td>
<td>Course Name</td>
<td>Roll Number</td>
<td>Student NAME</td>
<td>Father NAME</td>
<td>Mobile</td>
<td>Email</td>
<td>Action</td>
</tr>
<?php
$ctr=1;
while($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
?>
<tr>
<td><?php echo $ctr; ?></td>
<td><?php echo $rec["coursename"]; ?></td>
<td><?php echo $rec["sroll"]; ?></td>
<td><?php echo $rec["sname"]; ?></td>
<td><?php echo $rec["sfname"]; ?></td>
<td><?php echo $rec["mobile"]; ?></td>
<td><?php echo $rec["email"]; ?></td>
<td>
<a href="mytrick.php?mych=7&stdid=<?php echo $rec["stdid"]; ?>">
<img src="del.png" width="20" height="20" border="0" align="center">
</a>
<a href="">
<img src="edit.png" width="20" height="20" border="0" align="center">
</a>
</td>
</tr>
<?php
$ctr++;
}
?>
</table>