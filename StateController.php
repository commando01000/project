<?php
    include_once 'StateModel.php';
    include_once 'afterlogin.php';
    include_once 'Context.php';
    include_once 'FormState.php';
    include_once 'AfterFormState.php';
    include_once 'State.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
          $Do=new Context();
            
            $x = new FormState();
            $x->proccesse($Do);
            echo $Do->getDescription() . "<br>";
            
            $x = new ProcessState();
            $x->proccesse($Do);
            echo $Do->getDescription() . "<br>";
            
            $x = new AfterFormState();
            $x->proccesse($Do);
            echo $Do->getDescription() . "<br>";
        header("Location: StateModel.php");
    }
         
          
?>
