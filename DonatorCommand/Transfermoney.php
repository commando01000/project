<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transfermoney
 *
 * @author jouhn
 */
include_once 'Donation.php';
class Transfermoney implements Command {
    private $ref;
    public function transfermoney($trns)
    { 
        $this->ref = $trns;
    }
    public function execute()
    { 
        $this->ref->transfer();
    }
}
?>
