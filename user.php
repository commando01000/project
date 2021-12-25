<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Mahmoud
 */
include_once 'Admin Model.php';
include_once 'phone_no.php';
include_once 'address.php';
    class user {
    public $id;
    public $name;
    public $gender;
    public $usertypeObj;
    public $DOB;
    public $phone_no_id;
    public $job;
    public $home_no;
    public $address_id;
    function __construct($id)
    {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql="SELECT * FROM user WHERE id = $id";
           $UserDataSet = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($UserDataSet))
           {
              $this->id = $id;
              $this->name = $row["namee"];
              $this->gender = $row["gender"];
              $this->usertypeObj = new usertype($row["usertype_id"]);
              $this->DOB = $row["DOB"];
              $this->phone_no_id = new phone_no($row["phone_no_id"]);
              $this->job = $row["job"];
              $this->home_no = $row["home_no"];
              $this->address_id = new address($row["address_id"]);
           }
        }
    }
    public static function Select_All_Users_From_DB()
    {
        $sql="SELECT * FROM user";
        $con = mysqli_connect("localhost","root","","project 3");
        $UserDataSet = mysqli_query($con,$sql);
        $i = 0;
        $Result;
        while($row = mysqli_fetch_array($UserDataSet))
        {
            $MyObj = new user($row["id"]);
            $Result[$i] = $MyObj;
            $i++;
        }
        return $Result;
    }
    function insert($name,$gender,$usertype_id,$DOB,$phone_no_id,$job,$home_no,$address_id)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' . mysqli_error());
        }
        else
        {
            $sql = "SELECT * FROM user WHERE namee = '$name'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 0)
            {
                $sql = "INSERT INTO user(namee,gender,usertype_id,DOB,phone_no_id,job,home_no,address_id) VALUES('$name','$gender','$usertype_id','$DOB','$phone_no_id','$job','$home_no','$address_id')";
                mysqli_query($con,$sql) or die (mysqli_error($con));
                echo "Registered Successfully ! ";
            }
            else
            {
                echo "user already exists ! ";
            }
        }
        $con->close();
    }
}
?>