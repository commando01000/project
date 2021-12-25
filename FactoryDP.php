<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FactoryDP
 *
 * @author Dell
 */
include_once 'VISA.php';
include_once 'BankTransfer.php';
include_once 'VodafoneCash.php';
include_once 'Fawry.php';
include_once 'PayType.php';

class FactoryDP {
    
    public function get_PayType($PayType)
    {
        if($PayType == null)
        {
            return null;
        }
        if($PayType == 1)
        {
            return new VISA();
        }
         if($PayType == 2)
        {
            return new Fawry();
        }
        if($PayType == 3)
        {
            return new VodafoneCash();
        }
        if($PayType == 4)
        {
            return new BankTransfer();
        }
        if($PayType == 5)
        {
            return new MasterCard();
        }
     return null;
    }
    
}
