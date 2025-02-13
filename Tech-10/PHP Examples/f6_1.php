<?php
$nm=$_POST["nm"];
$cl=$_POST["cl"];
echo "<table border='1' bgcolor='$cl'>";
for($i=1;$i<=$nm;$i++){
echo "<tr><td height='20' width='100'></tr></td>";
}
echo "</table>";
?>