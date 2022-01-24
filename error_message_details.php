<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of error_message_details
 *
 * @author Mahmoud
 */
include_once 'language.php';
include_once 'error_messages.php';
class error_message_details {
    public $id;
    public $language_id;
    public $sentence_id;
    public $translation_sentence_id;
    function __construct($id)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        $sql = "SELECT * FROM error_message_details WHERE id = $id";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result);
        $this->id = $id;
        $this->language_id = new language($row["language_id"]);
        $this->sentence_id = new error_messages($row["sentence_id"]);
        $this->translation_sentence_id = new error_messages($row["translation_sentence_id"]);
    }
}
//$x = new error_message_details(2);
//echo $x->sentence_id->message . " " . $x->translation_sentence_id->message;
?>