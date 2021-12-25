<?php
    include_once 'Admin Model.php';
    include_once 'Admin View.php';
    include_once 'user.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $gender = $usertype_id = $DOB = $phone_no_id = $job = $home_no = $address_id = " ";
        $name = trim($_POST["name"]);
        $gender = trim($_POST["gender"]);
        $usertype_id = trim($_POST["usertype_id"]);
        $DOB = trim($_POST["DOB"]);
        $phone_no_id = trim($_POST["phone_no_id"]);
        $job = trim($_POST["job"]);
        $home_no = trim($_POST["home_no"]);
        $address_id = trim($_POST["address_id"]);
        $user = new user(-1);
        $user->insert($name, $gender, $usertype_id, $DOB, $phone_no_id, $job, $home_no, $address_id);
        header("Location:afterlogin.php");
    }
?>
