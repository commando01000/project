<?php
include_once 'DonatorRegModel.php';
include_once 'DonationDetailsView.php';


if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $ID = trim($_POST["id"]);
    $name = trim($_POST["name of donator"]);
    $phone_no = trim($_POST["phone of donator"]);
    $Address = trim($_POST["addressss of donator"]);

    $GetDonator = new donator($ID);
    $ViewDonator = new DonationDetailsView();
    $GetDonator->ShowAdminDetails($ViewDonator);
    header("Location: DonationDetailsView.php");
}
?>