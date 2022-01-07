<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AfterForm
 *
 * @author Dell
 */
 include_once 'State.php';
class AfterFormState implements State{
    
    public function proccesse($Do) {
        $Do->setState(new AfterFormState());
        $Do->description = "AfterFormState Here! ";
    }

}
