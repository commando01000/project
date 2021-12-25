<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/** 
 * Description of Fawry
 *
 * @author Dell
 */
include_once 'PayType.php';
include_once 'FawryController.php';
class Fawry implements PayType{
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * from donator where name = '$ArrObj[2]'";
        $row = mysqli_query($con,$sql);
        $user_id = $row["user_id"];
        $num = mysqli_num_rows($row);
        if($num >= 1)
        { 
            $sql = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(2,7,'$user_id','$ArrObj[0]')";
            $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            $sql = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(2,8,'$user_id','$ArrObj[1]')";
            $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        }
        else
        {
            echo "Donator not found !";
        }   
    }
}

