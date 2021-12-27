<?php
 
include_once 'PayType.php';
class VISA implements PayType{
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost","root","","project 3");
       
        $con->close();
    }
}
