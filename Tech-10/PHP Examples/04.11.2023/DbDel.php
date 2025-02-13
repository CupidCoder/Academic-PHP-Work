<?php
include("myCon.php");
$rn=$_POST["rn"];
$delQ="delete from table1 where rollno=$rn";
mysqli_query($con,$delQ);
header("Location:DbEx6.php");
?>