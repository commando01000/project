<?php
    include_once 'LoginCheckModel.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = $password = $type = "";
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $type = trim($_POST["job"]);
        $Login = new ProxyDP($username,$password,$type);
        header("Location: afterlogin.php");
    }
?>
