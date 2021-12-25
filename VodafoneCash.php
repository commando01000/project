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
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' . mysqli_error());
        }
        else
        {
           
        }
        $con->close();
    }
}
