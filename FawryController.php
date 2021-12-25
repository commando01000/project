<?php

include_once 'FawryForm.php';
include_once 'FactoryDP.php';
include_once 'Fawry.php';
include_once 'PayType.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $Code = $AccountNumber = $Name="";
        $Code = trim($_POST["Code"]);
        $AccountNumber = trim($_POST["AccountNumber"]);
        $Name= trim($_POST["name"]);
        $CreateFactory = new FactoryDP();
        $ArrObj[0] = $Code;
        $ArrObj[1] = $AccountNumber;
        $ArrObj[2] = $Name;
        $fawry = $CreateFactory->get_PayType(2);
        $fawry->Pay($ArrObj);
        header("Location: afterlogin.php");
    }
?>