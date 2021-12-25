<?php
    include_once 'user.php';
    include_once 'user_view.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $id = "";
        $id = trim($_POST["id"]);
        $user = new user($id);
        $user_view = new user_view();
        $user_view->Show_User($user);
    }   
?>