<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PaymentMethodOptValue
 *
 * @author Mahmoud
 */
include_once 'Payment_Method.php';
include_once 'PaymentMethodOpt.php';
include_once 'user.php';
include_once 'Options.php';
class PaymentMethodOptValue {
    public $id;
    public $PaymentMethod_ID;
    public $PaymentMethodOptionArrayObj;
    public $user_id;
    public $Value;
    function __construct($id)
    {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql="SELECT * FROM paymentmethodoptionsvalue WHERE id = $id";
           $Data = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($Data))
           {
              $this->id = $id;
              $this->PaymentMethod_ID = new Payment_Method($row["PaymentMethod_ID"]);
              $this->user_id = new user($row["id"]);
              $val = $this->PaymentMethod_ID->id;
              $sql = "SELECT * FROM paymentmethodoptionsvalue WHERE PaymentMethod_ID = $val";
              $AllPaymentMethodOptionsAndValues = mysqli_query($con,$sql);
              $i = 0;
              while($roww = mysqli_fetch_array($AllPaymentMethodOptionsAndValues))
              {
                  $this->PaymentMethodOptionArrayObj[$i] = new Options($roww["PaymentMethodOptionID"]);
                  $this->Value[$i] = $roww["Value"];
                  $i++;
              }
           }
        }
        $con->close();
    }
    function insert($PaymentMethod_ID)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' .mysqli_error());
        }
        else
        {
            $sql = "SELECT * FROM payment_method WHERE name = '$name'";
            $row = mysqli_query($con,$sql);
            $search = mysqli_num_rows($row);
            if($search == 0)
            {
                $sql2 = "INSERT INTO payment_method (name) VALUES('$name')";
                $do = mysqli_query($con,$sql2);
            }
        }
        $con->close();
    }
    function update($name)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' .mysqli_error());
        }
        else
        {
            $sql = "SELECT * FROM payment_method WHERE name = '$name'";
            $row = mysqli_query($con,$sql);
            $search = mysqli_num_rows($row);
            if($search == 0)
            {
                $sql2 = "INSERT INTO payment_method (name) VALUES('$name')";
                $do = mysqli_query($con,$sql2);
            }
        }
        $con->close();
    }
    function delete($name)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' .mysqli_error());
        }
        else
        {
            $sql = "SELECT * FROM payment_method WHERE name = '$name'";
            $row = mysqli_query($con,$sql);
            $search = mysqli_num_rows($row);
            if($search == 0)
            {
                $sql2 = "INSERT INTO payment_method (name) VALUES('$name')";
                $do = mysqli_query($con,$sql2);
            }
        }
        $con->close();
    }
}
?>
