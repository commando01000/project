<?php
    include_once 'Admin Model.php';
    include_once 'Admin View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = "";
        $id = trim($_POST["id"]);
        $CreateAdmin = new admin();
        $CreateAdmin->delete($id);
        header('Location:afterlogin.php');
    }
?>
