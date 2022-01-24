<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AudioPlayer
 *
 * @author Andrew
 */
include_once 'MediaPlayer.php';
include_once 'MKVPlayer.php';
include_once 'MP4Player.php';
include_once 'VLCPlayer.php';
include_once 'WEBMPlayer.php';
include_once 'Adapter.php';
class AudioPlayer implements MediaPlayer{
    public $ref;
    public function play($type){
        if($type == "MP3")
        {
            echo "Playing MP3" . "<br>";
        }
        if ($type == "MKV" )
        {
            echo "playing MKV" . "<br>";
            $ref = new Adapter($type);
            $ref->play($type);
        }
        if($type == "MP4")
        {
            echo "playing MP4" . "<br>";
            $ref = new Adapter($type);
            $ref->play($type);
        }
        if($type == "VLC")
        {
            echo "playing VLC" . "<br>";
            $ref = new Adapter($type);
            $ref->play($type);
        }
        if($type == "WEBM")
        {
            echo "playing WEBM" . "<br>";
            $ref = new Adapter($type);
            $ref->play($type);
        }
    }
}
?>