<?php
    include_once 'Admin Model.php';
    include_once 'Admin View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $username = $password = "";
        $username = trim($_POST["Username"]);
        $password = trim($_POST["Password"]);
        $type = trim($_POST["type"]);
        $CreateAdmin = new admin(-1);
        $CreateAdmin->insert($username,$password,$type);
        header("Location: afterlogin.php");
    }
?>
