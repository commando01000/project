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
       include_once 'Shape.php';
            include_once 'DonatorCommand.php';
            include_once 'Donate.php';
            include_once 'Refund.php';
            $x = "";
            $f = new Command();
            $x = $f->getShape("Rectangle");
            $x->draw();
        ?>
    </body>
</html>
