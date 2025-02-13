<?php
include("myCon.php");
$prid = $_REQUEST["pi"];
$selQ = "select * from product where product_id=$prid";
$result = mysqli_query($con, $selQ);
$prid = "";
$prnm = "";
$prprice = "";
$prqua = "";
if ($rec = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $prid = $rec["product_id"];
    $prnm = $rec["product_name"];
    $prprice = $rec["product_price"];
    $prqua = $rec["product_quantity"];
} else {
    echo "$pi does not exists";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT</title>
</head>

<body style="background-color:#1c0366;">
    <div>
        <form name="frm" method="post" action="CodeLogics.php?cs=3">
            Product ID:<input type="text" name="pi" value="<?php echo $prid; ?>" readonly><br>
            Product Name:<input type="text" name="pnm" value="<?php echo $prnm; ?>"><br>
            Product Price:<input type="text" name="prp" value="<?php echo $prprice; ?>"><br>
            Product Quantity:<input type="text" name="prqua" value="<?php echo $prqua; ?>"><br>
            <input type="submit" name="s1" value="Update Data">
        </form>
    </div>
</body>

</html>