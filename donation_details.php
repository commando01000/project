<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of donation_details
 *
 * @author dell
 */
include_once 'DonatorModel.php';
include_once 'user.php';
class donation_details {
    public $id;
    public $donator_id;
    public $donation_typeID;
    public $Qty;
    function __construct($id)
    {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql = "SELECT * FROM donation_details WHERE id = $id";
           $UserDataSet = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($UserDataSet))
           {
              $this->id = $id;
              $this->donator_id = new user($row["donator_id"]);
              $this->donation_typeID = new Donation_Type($row["donation_typeID"]);
              $this->Qty = $row["Qty"];
           }
        }
    }
}
//$x = new donation_details(1);
//echo $x->donator_id->name . " " . $x->donation_typeID->name . " " . $x->Qty;
?>
