<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Options
 *
 * @author Mahmoud
 */
class Options {
    public $id;
    public $name;
    function __construct($id) {
        if($id != -1)
        {
            $con = mysqli_connect("localhost","root","","project 3");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            $sql="SELECT * FROM options WHERE id = $id";
            $options = mysqli_query($con,$sql);
            if($row = mysqli_fetch_array($options))
            {
               $this->id = $id;
               $this->name = $row["name"];
            }
        }
    }
    function insert($name)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' .mysqli_error());
        }
        else
        {
            $sql = "SELECT * FROM options WHERE name = '$name'";
            $row = mysqli_query($con,$sql);
            $search = mysqli_num_rows($row);
            if($search == 0)
            {
                $sql2 = "INSERT INTO options (name) VALUES('$name')";
                $do = mysqli_query($con,$sql2);
            }
        }
        $con->close();
    }
}
?>