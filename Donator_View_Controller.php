<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 include_once 'DonatorModel.php';
 include_once 'Donator_View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = " ";
        $id = trim($_POST["id"]);
        $donator = new Donator($id);
        $donator_view = new donator_view();
        $donator_view->Show_donator($donator);
    }   
?>
