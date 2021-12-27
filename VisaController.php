<?php

include_once 'FactoryDP.php';
include_once 'VISA.php';
include_once 'PayType.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $NameOnCard = $CVV = $ExpirationDate = $CardNumber = $id = "";
        $NameOnCard = trim($_POST["name"]);
        $CVV = trim($_POST["CVV"]);
        $ExpirationDate = trim($_POST["exp_date"]);
        $CardNumber = trim($_POST["card_no"]);
        $id = trim($_POST["id"]);
        $CreateFactory = new FactoryDP();
        $ArrObj;
        $ArrObj[0] = $NameOnCard;
        $ArrObj[1] = $CVV;
        $ArrObj[2] = $ExpirationDate;
        $ArrObj[3] = $CardNumber;
        $ArrObj[4] = $id;
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM donator WHERE user_id = '$id'";
        $row = mysqli_query($con, $sql);
        $num = mysqli_num_rows($row);
        if($num > 0)
        {
            $VISA = $CreateFactory->getVISA();
            $VISA->Pay($ArrObj);
            header("Location: afterlogin.php");
        }
        else
        {
           echo '<script>alert("user is not registered as a donator !")</script>';
        }
        $con->close();
    }
?>
