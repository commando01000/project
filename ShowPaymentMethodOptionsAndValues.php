

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
    function Show_Payment_Method_Options($PaymentMethod)
    {
        echo $PaymentMethod->PaymentID->name . "<br>";
        $Result = $PaymentMethod->OptionArrObj;
        $j=0;
        for ($i = 0; $i < count($Result); $i++)
        {
            echo $j . " ." . $Result[i]->name . " ";
            echo "<br>";
            $j++;
        }
    }
    function Show_Payment_Method_Option_Values($PaymentMethod)
    {
        echo $PaymentMethod->PaymentID->name . "<br>";
        $Result = $PaymentMethod->OptionArrObj;
        $Result2 = $PaymentMethod->Value;
        $j=0;
        for ($i = 0; $i < count($Result); $i++)
        {
            echo $j . " ." . $Result[$i]->name . " " . $Result2[$i]->Value;
            echo "<br>";
            $j++;
        }
    }
?>