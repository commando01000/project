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
        $CreateFactory = new FactoryDP();
        $ArrObj;
        $ArrObj[0] = $Code;
        $ArrObj[1] = $AccountNumber;
        $ArrObj[2] = $id;
        $Fawry = $CreateFactory->get_PayType(2);
        $Fawry->Pay($ArrObj);
    }
?>
