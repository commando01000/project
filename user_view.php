<?php
include_once 'user.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_view
 *
 * @author Mahmoud
 */
class user_view {
    public function Show_User($user)
    {
        echo $user->name . " " . $user->gender . " " . $user->usertypeObj->name . " " . $user->DOB . " " . $user->phone_no_id->phone_no . " " . $user->job . " " . $user->home_no . " " . $user->address_id->address;
    }
    public function Show_All_Users()
    {
        $j = 2;
        $Result = user::Select_All_Users_From_DB();
        for ($i = 0; $i < count($Result); $i++)
        {
            echo  $j . "." . " " . $Result[$i]->name . "   " . $Result[$i]->gender . "   " . $Result[$i]->usertypeObj->name . "   " . $Result[$i]->DOB . "   " . $Result[$i]->phone_no_id->phone_no . "   " . $Result[$i]->job . "   " . $Result[$i]->home_no . "   " . $Result[$i]->address_id->address;
            echo "<br>";
            $j++;
        }
    }
}
?>