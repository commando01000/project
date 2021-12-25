<?php
class DonationDetailsView
{
    public function ShowDonationDetails($DonationDetails)
    {
        echo "name:".$DonationDetails->donator_id->name . "amount".$DonationDetails->amount . "item ".$DonationDetails->item;
    }
}
?>