<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of error_messages
 *
 * @author Mahmoud
 */
include_once "language.php";
class error_messages {
    public $id;
    public $language_id;
    public $message;
    function __construct($id) {
        $con = mysqli_connect("localhost","root","","project 3");
        $sql = "SELECT * FROM error_messages WHERE id = $id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $this->id = $id;
        $this->language_id = new language($row["id"]);
        $this->message = $row["message"];
    }
}
//$x = new error_messages(1);
//echo $x->message;
// WORKING
?>