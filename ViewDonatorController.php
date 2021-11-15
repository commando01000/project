<?php
include_once 'Patient Model.php';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
   $id = trim($_POST["id"]);
    $ViewDonator = new DonatorView();
    $ViewDonator->ShowDonatorDetails($id);
    header("Location: afterlogin.php");
}
?>