<?php
include("DCon.php");
$cid=$_POST["cid"];
$sql="delete from course where courseid=$cid";
mysqli_query($con,$sql);
header("Location:db7.php");
?>
