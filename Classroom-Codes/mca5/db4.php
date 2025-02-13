<?php
$cid=$_POST["cid"];
$cnm=$_POST["cnm"];
$con=mysqli_connect("localhost","root","","pro1");
$sql="insert into course values($cid,'$cnm')";
//echo $sql;
mysqli_query($con,$sql);
?>