<?php
include("myCon.php");
$sql="select * from table1 order by rollno desc";
$result=mysqli_query($con,$sql);
?>
<html>
<body>
<table border="1">
<tr>
<tH>Sl. No</tH>
<tH>ROLL</tH>
<tH>STUDENT NAME</tH>
<tH>COURSE NAME</tH>
</tr>
<?php
$i=1;$tcol="";
while($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
if($i%2==0)
$tcol="white";
else
$tcol="#cccccc";
?>
<tr bgcolor="<?php echo $tcol; ?>">
<td><?php echo $i;?></td>
<td><?php echo $rec["rollno"];?></td>
<td><?php echo $rec["sname"];?></td>
<td><?php echo $rec["course"];?></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>