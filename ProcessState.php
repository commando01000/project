<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Process
 *
 * @author Dell
 */
include_once 'State.php';
class ProcessState {
        
    public function proccesse($Do) {
        $Do->setState(new ProcessState());
        $Do->description = "AfterFormState Here! ";
    }
}
