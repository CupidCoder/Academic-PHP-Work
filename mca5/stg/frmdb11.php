<?php
include("DCon.php");
$cid=$_REQUEST["cid"];
$selQ="select * from course where courseid=$cid";
$result=mysqli_query($con,$selQ);
if($rec=mysqli_fetch_array($result,MYSQLI_BOTH)){
$cname=$rec["coursename"];
}
//echo $cid."<br>".$cname."<br>";
?>

<HTML>
<BODY>
<FORM NAME="F1" METHOD="POST" ACTION="db11.php">
<input type="HIDDEN" name="cid" value="<?php echo $cid; ?>" readonly>
Course Name: <input type="text" name="cnm" value="<?php echo $cname; ?>"><br>
<input type="submit" value="Edit data">
</FORM>
</BODY>
</HTML>