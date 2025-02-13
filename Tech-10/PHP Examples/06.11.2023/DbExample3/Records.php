<?php
include("myCon.php");
$sql = "select * from product order by product_id desc";
$result = mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT</title>
    <script language="Javascript" type="text/JavaScript">
        function fn1(){
var v=confirm("Are you sure want to delete data.");
if(v){
frm.submit();
}
}
function fn2(){
var v=confirm("Are you sure want to update data.");
if(v){
frm.submit();
}
}
</script>

</head>

<body style="background-color:#1c0366; text-align:center;">
    <table align="center" style="text-align: center;border:1px;">
        <tr style="background-color:black;color:wheat">
            <th style="width: 130px;">Product ID</th>
            <th style="width: 180px;">Product Name</th>
            <th style="width: 130px;">Product Price</th>
            <th style="width: 140px;">Product Quantity</th>
            <th style="width: 130px;">Action</th>
        </tr>
        <?php
        $i = 1;
        $tcol = "";
        while ($rec = mysqli_fetch_array($result, MYSQLI_BOTH)) {
            if ($i % 2 == 0)
                $tcol = "wheat";
            else
                $tcol = "white";
        ?>
            <tr bgcolor="<?php echo $tcol; ?>">
                <td><?php echo $rec["product_id"]; ?></td>
                <td><?php echo $rec["product_name"]; ?></td>
                <td><?php echo $rec["product_price"]; ?></td>
                <td><?php echo $rec["product_quantity"]; ?></td>
                <td>
                    <form name="frm" action="" method="post">
                        <a style="color:red;" name="del" href="CodeLogics.php?cs=1&pi=<?php echo $rec['product_id']; ?>" onclick="fn1();">Delete</a>
                        <b>/</b>
                        <a style="color:green;" name="upd" href="RecDb.php?pi=<?php echo $rec['product_id']; ?>" onclick="fn2();">Update</a>
                    </form>
                </td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>
</body>

</html>