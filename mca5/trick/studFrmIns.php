<?php
session_start();
if($_SESSION["usernm"]==""){
header("Location:index.php");
}
include("DCon.php");
$sq="select * from course order by coursename";
$result=mysqli_query($con,$sq);
?>
<HTML>
<BODY>
<h3 align="center">Course Add Form</h3>
<FORM NAME="F1" METHOD="POST" ACTION="mytrick.php?mych=6">
Course Name:<select name="courseid">
<option value="">-select course-</option>
<?php
while($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
?>
<option value="<?php echo $rec["courseid"]; ?>">
<?php echo $rec["coursename"]; ?>
</option>
<?php
}
?>
</select><br>
Student Name: <input type="text" name="sname"><br>
Father Name: <input type="text" name="sfname"><br>
Contact Number: <input type="text" name="mobile"><br>
Email: <input type="text" name="email"><br>
<input type="submit">
</FORM>
</BODY>
</HTML>