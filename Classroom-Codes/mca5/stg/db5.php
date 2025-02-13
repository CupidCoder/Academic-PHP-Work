<?php
$cnm=$_POST["cnm"];
include("DCon.php");
$sql="insert into course(coursename) values('$cnm')";
//echo $sql;
mysqli_query($con,$sql);
header("Location:db7.php");
?>