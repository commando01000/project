<?php
    include_once 'Donator Model.php';
    include_once 'Donator View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = "";
        $id = trim($_POST["id"]);
        $DeleteAllDonator = new donator();
        $DeleteAllDonator->DeleteAll($id);
        header('Location:afterlogin.php');
    }
?>