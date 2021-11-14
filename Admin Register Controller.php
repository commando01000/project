<?php
    include_once 'Admin Model.php';
    include_once 'Admin View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $username = $password = "";
        $name = trim($_POST["Name"]);
        $username = trim($_POST["Username"]);
        $password = trim($_POST["Password"]);
        $type = trim($_POST['type']);
        $CreateAdmin = new admin();
        $CreateAdmin->insert($name,$username,$password,$type);
        header('Location:LoginFA.php');
    }
?>
