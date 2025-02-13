<?php
include("DCon.php");
$mych=$_REQUEST["mych"];
switch($mych){
case 1://to insert data in course table
$cnm=$_POST["cnm"];
$sql="insert into course(coursename) values('$cnm')";
//echo $sql;
mysqli_query($con,$sql);
header("Location:db7.php");
break;
case 2://to delete data in course table
$cid=$_REQUEST["cid"];
$sql="delete from course where courseid=$cid";
mysqli_query($con,$sql);
header("Location:db7.php");
break;
case 3://to update data in course table
$cid=$_POST["cid"];
$cnm=$_POST["cnm"];
$sql="update course set coursename='$cnm' where courseid=$cid";
mysqli_query($con,$sql);
header("Location:db7.php");
break;
case 4:// for admin login
$unm=$_POST["unm"];
$pnm=$_POST["pnm"];
$sqlQ="select * from logins where usernm='$unm' and userpass='$pnm'";
$result=mysqli_query($con,$sqlQ);
if($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
session_start();
$_SESSION["usernm"]=$unm;
header("Location:dashboard.php");
}
else{
header("Location:index.php");
}
//echo $sqlQ;
break;
case 5:// for admin logout
session_start();
$_SESSION["usernm"]="";
session_destroy();
header("Location:index.php");
//echo $sqlQ;
break;
case 6://to insert data in student table
$courseid=$_POST["courseid"];
$sname=$_POST["sname"];
$sfname=$_POST["sfname"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$sql="insert into student(courseid,sname,sfname,mobile,email) values($courseid,'$sname','$sfname','$mobile','$email')";
//echo $sql;
mysqli_query($con,$sql);
echo "Record Inserted";
//header("Location:db7.php");
break;
case 7://to delete data in student table
$stdid=$_REQUEST["stdid"];
$sql="delete from student where stdid=$stdid";
mysqli_query($con,$sql);
header("Location:studList.php");
break;
}
?>
