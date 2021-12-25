
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

<?php
    include_once 'PaymentMethodOptValues.php';
    include_once 'ShowPaymentMethodOptionsAndValues.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = "";
        $id = trim($_POST["id"]);
        $PaymentMethod = new PaymentMethodOptValue($id);
        Show_Payment_Method_Option_Values($PaymentMethod);
    }   
?>
