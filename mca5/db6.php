<?php

$con=mysqli_connect("localhost","root","","pro1");
$sql="select * from course";
$result=mysqli_query($con,$sql);
while($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
echo $rec[0]."---".$rec[1]."<br>";
}
?>