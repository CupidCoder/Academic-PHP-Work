<?php
include("DCon.php");
$cid=$_POST["cid"];
$cnm=$_POST["cnm"];
$sql="update course set coursename='$cnm' where courseid=$cid";
mysqli_query($con,$sql);
header("Location:db7.php");
?>
