<?php

include_once 'FawryForm.php';
include_once 'FactoryDP.php';
include_once 'Fawry.php';
include_once 'PayType.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $Code = $AccountNumber = $Name = "";
        $Code = trim($_POST["Code"]);
        $AccountNumber = trim($_POST["AccountNumber"]);
        $id = trim($_POST["id"]);
        $ArrObj;
        $ArrObj[0] = $Code;
        $ArrObj[1] = $AccountNumber;
        $ArrObj[2] = $id;
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM donator WHERE user_id = '$id'";
        $row = mysqli_query($con, $sql);
        $num = mysqli_num_rows($row);
        if($num > 0)
        {
            $Fawry = $CreateFactory->getFawry();
            $Fawry->Pay($ArrObj);
            header("Location: afterlogin.php");
        }
        else
        {
           echo '<script>alert("user is not registered as a donator !")</script>';
        }
        $con->close();
    }
?>
