<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASSIGNMENT</title>
</head>

<body style="background-color:#1c0366;color:wheat;">
    <?php
    include("myCon.php");
    $cs = $_REQUEST["cs"];
    switch ($cs) {
        case 1: // to delete the data from product table
            $prid = $_REQUEST["pi"];
            $delQ = "delete from product where product_id=$prid";
            mysqli_query($con, $delQ);
            header("Location:RecDb.php");
            break;

        case 2: // to insert the data in product table
            $prid = $_POST["pi"];
            $prnm = $_POST["prnm"];
            $prprice = $_POST["prp"];
            $prqua = $_POST["prqua"];
            $query = "insert into product(product_id,product_name,product_price,product_quantity) values($prid,'$prnm','$prprice',$prqua)";
            mysqli_query($con, $query);
            header("Location:RecDb.php");
            break;

        case 3: // to update the data from product table

            $prid = $_POST["pi"];
            $prnm = $_POST["pnm"];
            $prprice = $_POST["prp"];
            $prqua = $_POST["prqua"];
            $upQ = "update product set product_name='$prnm', product_price='$prprice',product_quantity='$prqua' where product_id=$prid";
            mysqli_query($con, $upQ);
            header("Location:RecDb.php");
            break;
        case 4: // To Check User Name and Password for login

            $unm = $_POST["unm"];
            $pass = $_POST["pass"];

            $selQ = "select * from logins where usrnm='$unm' and usrpass='$pass'";
            $result = mysqli_query($con, $selQ);
            $recCount = mysqli_num_rows($result);
            if ($recCount == 1) {
                session_start();
                $_SESSION["usr"] = $unm;
                header("Location:DashBoard.php");
            } else {
                echo "Username or Password was incorrect";
            }
            break;

        case 5: // To Logout 
            session_start();
            $_SESSION["usr"] = "";
            session_destroy();
            header("Location:LogIn.php");
            break;
    }
    ?>
</body>

</html>