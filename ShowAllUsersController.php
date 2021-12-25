<?php
    include_once 'user_view.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $user_view = new user_view();
        $user_view->Show_All_Users();
    }   
?>
