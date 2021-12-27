<?php
include_once 'PayType.php';
include_once 'VodafoneCash.php';
include_once 'FactoryDP.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        echo 'ggggggggggggggggggggggggg';
        $CardNumber = $CVV = $ExpDate = $id = "";
        $id = trim($_POST["id"]);
        $CardNumber = trim($_POST["CardNumber"]);
        $CVV = trim($_POST["CVV"]);
        $ExpDate = trim($_POST["ExpDate"]);
        $ArrObj;
        $ArrObj[0] = $id;
        $ArrObj[1] = $CardNumber;
        $ArrObj[2] = $CVV;
        $ArrObj[3] = $ExpDate;
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM donator WHERE user_id = '$id'";
        $row = mysqli_query($con, $sql);
        $num = mysqli_num_rows($row);
        if($num > 0)
        {
            $CreateFactory = new FactoryDP();
            $VodafoneCash = $CreateFactory->getVodafoneCash();
            $VodafoneCash->Pay($ArrObj);
            header("Location: afterlogin.php");
        }
        else
        {
           echo '<script>alert("user is not registered as a donator !")</script>';
        }
        $con->close();
    }
?>
