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
            include_once 'Context.php';
            include_once 'FormState.php';
            include_once 'AfterFormState.php';
            include_once 'State.php';
            $Do=new Context();
            
            $x = new FormState();
            $x->proccesse($Do);
            echo $Do->getDescription() . "<br>";
            
            $x = new AfterFormState();
            $x->proccesse($Do);
            echo $Do->getDescription() . "<br>";
        ?>
    </body>
</html>
