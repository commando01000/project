<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Adapter
 *
 * @author Andrew
 */
include_once 'MediaPlayer.php';
include_once 'MKVPlayer.php';
include_once 'MP4Player.php';
include_once 'VLCPlayer.php';
include_once 'WEBMPlayer.php';
include_once 'AdvancedMediaPlayer.php';
include_once 'AudioPlayer.php';
class Adapter implements MediaPlayer{
    public $advancedmedia;
    public function play($audiotype){
        if($audiotype == "MKV")
        {
            $this->advancedmedia = new MKVPlayer();
            $this->advancedmedia->playMKV();
        }
        if($audiotype == "MP4")
        {
            $this->advancedmedia = new MP4Player();
            $this->advancedmedia->playMP4();
        }
        if($audiotype == "VLC")
        {
           $this->advancedmedia = new VLCPlayer();
            $this->advancedmedia->playVLC();
        }
        if($audiotype == "WEBM")
        {
            $this->advancedmedia = new WEBMPlayer();
            $this->advancedmedia->playWEBM();
        }
    }
}
?>
