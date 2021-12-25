<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of phone_no
 *
 * @author Mahmoud
 */
class phone_no {
    public $id;
    public $phone_no;
    function __construct($id)
    {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql="SELECT * FROM phone_no WHERE id = $id";
           $UserDataSet = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($UserDataSet))
           {
              $this->id = $id;
              $this->phone_no = $row["phone_no"];
           }
        }
    }
}
?>