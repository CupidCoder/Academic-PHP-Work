<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT</title>
</head>

<body style="background-color:#1c0366;color:wheat">
    <form name="frm" method="post" action="CodeLogics.php?cs=2">
        Product Id:<input required style="margin: 3px 0px 0px 43px;" type="text" name="pi" onchange="fn();"><br>
        Product Name:<input required style="margin: 3px 0px 0px 18px;" type="text" name="prnm" onchange="fn();"><br>
        Product Price:<input required style="margin: 3px 0px 0px 23px;" type="text" name="prp" onchange="fn();"><br>
        Product Quantity:<input required style="margin-top: 3px;" type="text" name="prqua" onchange="fn();"><br>
        <input style="margin: 10px 0px 0px 195px;" type="submit" name="s1" value="Add Product">
    </form>
</body>

</html>