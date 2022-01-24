<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once 'MediaPlayer.php';
        include_once 'MKVPlayer.php';
        include_once 'MP4Player.php';
        include_once 'VLCPlayer.php';
        include_once 'WEBMPlayer.php';
        include_once 'Adapter.php';
        include_once 'AdvancedMediaPlayer.php';
        include_once 'AudioPlayer.php';
        $x = new AudioPlayer();
        $x->play("MKV");
        $x->play("MP4");
        $x->play("VLC");
        $x->play("WEBM");
        ?>
    </body>
</html>
