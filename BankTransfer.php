<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BankTransfer
 *
 * @author Dell
 */
include_once 'PayType.php';
class BankTransfer implements PayType{
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $id = $ArrObj[0];
        $user_id = $id;
        $sqll = "INSERT INTO paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(4,6,'$user_id','$ArrObj[1]')";
        $exec = mysqli_query($con,$sqll) or die (mysqli_error($con));
        $con->close();
    }
}
