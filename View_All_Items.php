




<?php
    include_once 'DonatorModel.php';
    function View_All_Items()
    {
        $Result = Donation_Type::List_All_Items();
        for($i = 0; $i < count($Result); $i++)
        {
            echo $i + 1 . " " . $Result[$i]->name . " " . "<br>";
        }
    }
?>