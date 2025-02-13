<?php
include("myCon.php");
$cs=$_REQUEST["cs"];

switch($cs){
case 1: // to delete the data from table1

$rn=$_POST["rn"];
$delQ="delete from table1 where rollno=$rn";
mysqli_query($con,$delQ);
header("Location:DbEx6.php");
break;

case 2: // to insert the data from table1
$rollno=$_POST["rno"];
$sname=$_POST["snm"];
$course=$_POST["course"];
$query="insert into table1(rollno,sname,course) values($rollno,'$sname','$course')";
//echo $query;
mysqli_query($con,$query);
header("Location:DbEx6.php");
break;

case 3:// to update the data from table1

$rno=$_POST["rno"];
$snm=$_POST["snm"];
$course=$_POST["course"];
$upQ="update table1 set sname='$snm', course='$course' where rollno=$rno";
mysqli_query($con,$upQ);
header("Location:DbEx6.php");
break;
}

?>