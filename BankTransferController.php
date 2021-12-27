<?php
include_once 'FactoryDP.php';
include_once 'BankTransfer.php';
include_once 'PayType.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $AccountNumber = $id = "";
        $id = trim($_POST["id"]);
        $AccountNumber = trim($_POST["AccountNumber"]);
        $ArrObj;
        $ArrObj[0] = $id;
        $ArrObj[1] = $AccountNumber;
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM donator WHERE user_id = '$id'";
        $row = mysqli_query($con, $sql);
        $num = mysqli_num_rows($row);
        if($num > 0)
        {
            $CreateFactory = new FactoryDP();
            $BankTransfer = $CreateFactory->getBankTransfer();
            $BankTransfer->Pay($ArrObj);
            header("Location: afterlogin.php");
        }
        else
        {
           echo '<script>alert("user is not registered as a donator !")</script>';
        }
        $con->close();
    }
?>
