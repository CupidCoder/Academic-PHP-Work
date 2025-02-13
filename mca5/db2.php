<?php
//mysqli_connect("DB server name","username","password","database name");
$con=mysqli_connect("localhost","root","","mca5");
$sql="insert into tb values(2,'HHH')";
mysqli_query($con,$sql);
?>