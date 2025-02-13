<?php
include("myCon.php");
$rn=$_REQUEST["rn"];
$selQ="select * from table1 where rollno=$rn";
$result=mysqli_query($con,$selQ);
$rno="";
$snm="";
$course="";
if($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
$rno= $rec["rollno"];
$snm=$rec["sname"];
$course=$rec["course"];
}else{
echo "$rn does not exists";
exit;
}
?>
<html>
<body>
<form name="f1" method="post" action="CodeLogics.php?cs=3">
Roll Number:<input type="text" name="rno" value="<?php echo $rno; ?>" readonly><br>
Stud Name:<input type="text" name="snm" value="<?php echo $snm; ?>"><br>
Course:<input type="text" name="course" value="<?php echo $course; ?>"><br>
<input type="submit" name="s1" value="Edit Data">
</form>
</body>
</html>