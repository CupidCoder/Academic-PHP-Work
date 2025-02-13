<?php
$cnm=$_POST["cnm"];
$con=mysqli_connect("localhost","root","","pro1");
$sql="insert into course(coursename) values('$cnm')";
//echo $sql;
mysqli_query($con,$sql);
header("Location:db7.php");
?>