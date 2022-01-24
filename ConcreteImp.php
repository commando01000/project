<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConcreteImp
 *
 * @author Mahmoud
 */
class ConcreteImp implements ExecQuery {
    
    public function executeQuery($Query) {
        echo "Executing Query" . "<br>";
    }
}
?>