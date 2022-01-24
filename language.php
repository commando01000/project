<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of language
 *
 * @author Mahmoud
 */
class language {
    public $id;
    public $name;
    function __construct($id) 
    {
        if($id != -1)
        {
            $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql="SELECT * FROM languages WHERE id = $id";
           $LanguageDataSet = mysqli_query($con,$sql);
           $row = mysqli_fetch_array($LanguageDataSet);
           $this->id = $id;
           $this->name = $row["name"];
        }
    }
    
         function delete($id)
    {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM languages  where id = $id";
        $row = mysqli_query($con,$sql);
        $num = mysqli_num_rows($row);
        if($num == 1)
        { 
            $sql = "DELETE FROM languages WHERE  id = $id";
            $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        }
        $con->close();
    }

    function update($id,$name)
    {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * FROM languages where id = $id";
        $row = mysqli_query($con,$sql);
        $num = mysqli_num_rows($row);
        if($num == 1)
        {  
            $sql = "UPDATE lanquages SET name ='$name' WHERE id ='$id'";
            $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        }
        $con->close();
    }

    function insert($name)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if($con)
        {
            $sql = "SELECT * FROM lanquages WHERE name = '$name'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 0)
            {
                $sql = "INSERT INTO languages (name) VALUES($name)";
            }
            mysqli_query($con,$sql) or die(mysql_error());
        }
        $con->close();
    }
}
?>
