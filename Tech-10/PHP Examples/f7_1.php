<?php
$rw=$_POST["rw"];
$cl=$_POST["cl"];
?>
<html>
<body>
<table border="1">
<?php
$i=1;
$cnt=1;
while($i<=$rw){
echo "<tr>";
$j=1;
while($j<=$cl){
?>
if(cnt%3==1){
<td bgcolor="red" width="100" height="20"></td>
}
else if(cnt%3==2){
<td bgcolor="green" width="100" height="20"></td>
}
else(cnt%3==0){
<td bgcolor="yellow" width="100" height="20"></td>
}
<?php
$cnt++;
$j++;
}
echo "</tr>";
$i++;
}
?>
</table>
</body>
</html>