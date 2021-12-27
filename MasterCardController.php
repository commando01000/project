<?php

include_once 'FactoryDP.php';
include_once 'MasterCard.php';
include_once 'PayType.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $CVV = $ExpirationDate = $CardNumber = $id = "";
        $CVV = trim($_POST["CVV"]);
        $ExpirationDate = trim($_POST["exp_date"]);
        $CardNumber = trim($_POST["card_no"]);
        $id = trim($_POST["id"]);
        $CreateFactory = new FactoryDP();
        $ArrObj;
        $ArrObj[0] = $CVV;
        $ArrObj[1] = $ExpirationDate;
        $ArrObj[2] = $CardNumber;
        $ArrObj[3] = $id;
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM donator WHERE user_id = '$id'";
        $row = mysqli_query($con, $sql);
        $num = mysqli_num_rows($row);
        if($num > 0)
        {
            $MasterCard = $CreateFactory->getMasterCard();
            $MasterCard->Pay($ArrObj);
            header("Location: afterlogin.php");
        }
        else
        {
           echo '<script>alert("user is not registered as a donator !")</script>';
        }
        $con->close();
    }
?>
