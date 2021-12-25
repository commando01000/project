





<?php
include_once 'PayType.php';
include_once 'FawryController.php';
include_once 'user.php';
class Fawry implements PayType {
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $id = $ArrObj[2];
        $user_id = $id;
        $sql = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(2,7,'$user_id','$ArrObj[0]')";
        $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        $sql2 = "INSERT into paymentmethodoptionsvalue(PaymentMethod_ID,PaymentMethodOptionID,user_id,Value) VALUES(2,6,'$user_id','$ArrObj[1]')";
        $go2 = mysqli_query($con,$sql2) or die (mysqli_error($con));
    }
}
?>
