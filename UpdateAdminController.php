<?php
    include_once 'Admin Model.php';
    include_once 'Admin View.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = $name = $username = $password = "";
        $id = trim($_POST["id"]);
        $name = trim($_POST["Name"]);
        $username = trim($_POST["Username"]);
        $password = trim($_POST["Password"]);
        $CreateAdmin = new admin();
        $CreateAdmin->Update($id,$name,$username,$password);
        header('Location:afterlogin.php');
    }
?>
