<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MKVPlayer
 *
 * @author Andrew
 */
include_once'AdvancedMediaPlayer.php';
class MKVPlayer implements AdvancedMediaPlayer{
    
    public function playMKV() {
        echo "Playing MKV Player" . "<br>";
    }

    public function playMP4() {
        
    }

    public function playVLC() {
        
    }

    public function playWEBM() {
        
    }
}
?>
