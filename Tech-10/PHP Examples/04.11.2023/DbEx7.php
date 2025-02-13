<?php
include("myCon.php");
$delQ="delete from table1 where rollno=11" ;
mysqli_query($con,$delQ);
?>