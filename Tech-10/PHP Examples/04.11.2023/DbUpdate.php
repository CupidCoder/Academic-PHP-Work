<?php
include("myCon.php");
$rno=$_POST["rno"];
$snm=$_POST["snm"];
$course=$_POST["course"];
$upQ="update table1 set sname='$snm', course='$course' where rollno=$rno";
mysqli_query($con,$upQ);
header("Location:DbEx6.php");
?>