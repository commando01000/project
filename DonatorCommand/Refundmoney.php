<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Refundmoney
 *
 * @author jouhn
 */
class Refundmoney implements Command {
     private $ref;
    public function refundmoney($ref)
    { 
        $this->ref = $ref;
    }
    public function execute()
    { 
        $this->ref->refund();
    }
}
?>
