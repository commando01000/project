<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FactoryDP
 *
 * @author Mahmoud
 */
include_once 'VISA.php';
include_once 'BankTransfer.php';
include_once 'VodafoneCash.php';
include_once 'Fawry.php';
include_once 'PayType.php';

class FactoryDP {
    function __construct()
    {
        
    }
    public function getFawry(): Fawry
    {
        return new Fawry();
    }
    public function getVISA(): VISA
    {
        return new VISA();
    }
    public function getVodafoneCash(): VodafoneCash
    {
        return new VodafoneCash();
    }
    public function getBankTransfer(): BankTransfer
    {
        return new BankTransfer();
    }
    public function getMasterCard(): MasterCard
    {
        return new MasterCard();
    }
}
?>
