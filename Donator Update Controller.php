<?php
include_once 'StrategyDP.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $ID = trim($_POST["ID of donator"]);
    $Amount = trim($_POST["new amount"]);

    $UpdateDonator = new donator(0);
    $UpdateDonator->update_donation($ID,$AMOUNT);
    header("Location: afterlogin.php");
}
?>