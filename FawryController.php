<?php
    include_once 'StrategyDP.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $FawryPay = trim($_POST["Fawry"]);
        $donator = new donator(new Pay_With_Fawry());
        $Result = $donator->executeStrategy($FawryPay);
    }
?>
