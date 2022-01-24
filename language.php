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
}
?>
