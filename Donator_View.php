<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'DonatorModel.php';
class donator_view {
    public function Show_donator($donator)
    {
        echo $donator->id . " " . $donator->user_id->name . " " . $donator->Donation_TypeID->name;
    }
    public function Show_All_Donators()
    {
        $Result = Donator::SelectAllDonatorsFromDB();
        for ($i=0;$i<count($Result);$i++)
        {
            echo   $Result[$i]->id . " " .  $Result[$i]->user_id->name . " " .  $Result[$i]->Donation_TypeID->name;
            echo "<br>";
        }
    }
}
?>