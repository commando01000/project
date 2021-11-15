<?php
class DonationDetailsView
{
    public function ShowAdminDetails($DonationDetails)
    {
        echo "name:".$DonationDetails->donator_id;
        echo "amount".$DonationDetails->amount;
        echo "username".$DonationDetails->item;
    }
}
?>