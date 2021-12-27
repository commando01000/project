<?php

include_once 'PayType.php';
class MasterCard implements PayType{
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost","root","","project 3");
         $id = $ArrObj[3];
        $user_id = $id;
        $sql = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(5,2,'$user_id','$ArrObj[0]')";
        $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        $sql2 = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(5,4,'$user_id','$ArrObj[1]')";
        $go2 = mysqli_query($con,$sql2) or die (mysqli_error($con));
        $sql3 = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(5,5,'$user_id','$ArrObj[2]')";
        $go3 = mysqli_query($con,$sql3) or die (mysqli_error($con));
        $con->close();
    }
}
