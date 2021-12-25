<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Dell
 */
include_once 'VISA.php';
include_once 'BankTransfer.php';
include_once 'VodafoneCash.php';
include_once 'Fawry.php';
include_once 'PayType.php';
include_once 'FactoryDP.php';
interface PayType {
    public function Pay($ArrObj);
}
