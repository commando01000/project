<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Context
 *
 * @author Dell
 */
class Context {
      public $State;
    public $description;
    
    public function getDescription()
    {
        return $this->description;
    }
    public function setState($State)
    {
        $this->State = $State;
    }
    public function getState()
    {
        return $this->State;
    }
    
}
