<?php
class DonatorView
{
    function ShowDonatorDetails($Donator)
    {
        echo "id: ".$Donator->name;
        echo "name: ".$Donator->phone_no;
        echo "gender ".$Donator->address;
        echo "age ".$Donator->item;
        
    }
}
?>