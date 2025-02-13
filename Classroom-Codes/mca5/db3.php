<?php

$slno=$_POST["slno"];
$tnm=$_POST["tnm"];
$con=mysqli_connect("localhost","root","","mca5");
$sql="insert into tb values($slno,'$tnm')";
echo $sql;
mysqli_query($con,$sql);
?>