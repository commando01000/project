<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormState
 *
 * @author Dell
 */
 include_once 'State.php';
class FormState  implements State{
    
    public function proccesse($Do) {
        $Do->setState(new FormState());
        $Do->description = "FormState Here! ";
    }

}
