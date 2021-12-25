<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentMethodOpt
 *
 * @author Mahmoud
 */
include_once 'Payment_Method.php';
include_once 'Options.php';
class PaymentMethodOpt {
    public $id;
    public $PaymentID;
    public $OptionArrObj;
    function __construct($id)
    {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql = "SELECT * FROM paymentmethodoptions WHERE id = $id";
           $Data = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($Data))
           {
              $this->id = $id;
              $this->PaymentID = new Payment_Method($row["PaymentID"]);
              $val = $this->PaymentID->id;
              $sql="SELECT * FROM paymentmethodoptions WHERE PaymentID = $val";
              $AllPaymentMethod = mysqli_query($con,$sql);
              $i = 0;
              while($row1 = mysqli_fetch_array($AllPaymentMethod))
              {
                  $this->OptionArrObj[$i] = new Options($row1["OptionID"]);
                  $i++;
              }
           }
        }
    }
}
?>