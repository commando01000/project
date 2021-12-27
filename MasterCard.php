<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MasterCard
 *
 * @author Dell
 */
include_once 'PayType.php';
class MasterCard implements PayType{
    public function Pay($ArrObj) {
        $con = mysqli_connect("localhost","root","","project 3");
        
        $con->close();
    }
}
