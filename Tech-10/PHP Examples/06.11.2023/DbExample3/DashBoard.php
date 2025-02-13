<?php
session_start();
if ($_SESSION["usr"] == "") {
    header("Location:LogIn.php");
}
$usr = $_SESSION["usr"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT</title>
</head>

<body style="background-color:#1c0366;color:wheat">
    <H1 align="center">Assignment(<?php echo $usr; ?>)</h1>
    <p align="center">
        <a style="color:yellowgreen;text-decoration:none" href="AddRec.php" target="fr1">Add New Record</a> |
        <a style="color:yellowgreen;text-decoration:none" href="Records.php" target="fr1">Show All Records</a>
    </p>
    <p align="center">
        <iframe name="fr1" src="Welcome.php" width="800" height="500" frameborder="0"></iframe>
    </P>
    <a style="margin:0px 0px 0px 1100px; color:cyan" href="CodeLogics.php?cs=5">LogOut</a>
</body>

</html>