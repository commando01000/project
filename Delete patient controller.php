<?php
    include_once 'Patient Model.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $id = "";
        $id = trim($_POST["Name"]);
        $DeletePatient = new patient(-1);
        $DeletePatient->Delete($id);
        header('Location:afterlogin.php');
    }
?>
