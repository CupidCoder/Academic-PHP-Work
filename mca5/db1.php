<?php
//mysqli_connect("DB server name","username","password","database name");
$con=mysqli_connect("localhost","root","","mca5");
$sql="create table tb1(slno int,tnm varchar(20))";
mysqli_query($con,$sql);
?>