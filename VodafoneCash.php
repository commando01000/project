<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VodafoneCash
 *
 * @author Dell
 */
include_once 'PayType.php';
class VodafoneCash implements PayType{
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $id = $ArrObj[0];
        $user_id = $id;
        $sql = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(3,5,'$user_id','$ArrObj[1]')";
        $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        $sql2 = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(3,2,'$user_id','$ArrObj[2]')";
        $go2 = mysqli_query($con,$sql2) or die (mysqli_error($con));
        $sql3 = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(3,4,'$user_id','$ArrObj[3]')";
        $go3 = mysqli_query($con,$sql3) or die (mysqli_error($con));
        $con->close();
    }
}
