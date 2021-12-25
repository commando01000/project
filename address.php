<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of address
 *
 * @author Mahmoud
 */
class address {
    public $id;
    public $address;
    function __construct($id) {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql="SELECT * FROM address WHERE id = $id";
           $addresses = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($addresses))
           {
              $this->id = $id;
              $this->address = $row["address"];
           }
        }
    }
}
?>