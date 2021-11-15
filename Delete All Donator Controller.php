<?php
    include_once 'Donator Model.php';
    include_once 'Donator View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $donid = "";
        $donid = trim($_POST["donid"]);
        $DeleteAllDonator = new donator();
        $DeleteAllDonator->DeleteAll($donid);
        header('Location:afterlogin.php');
    }
?>
