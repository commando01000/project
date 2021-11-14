<?php
    include_once 'Patient Model.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $NAME = $Gender = $Age = $Job = $Maritalstatus = $NumberInFamily = $Address = $PhoneNunber = $HomeNumber = $SupervisedBy = $PatientComplain = $Complain = "";
        $NAME = trim($_POST["namee"]);
        $Gender = trim($_POST["gender"]);
        $Age = trim($_POST["age"]);
        $Job = trim($_POST["job"]);
        $Maritalstatus = trim($_POST["marital_status"]);
        $NumberInFamily = trim($_POST["number_in_family"]);
        $Address = trim($_POST["adresss"]);
        $PhoneNumber = trim($_POST["phone_no"]);
        $HomeNumber = trim($_POST["home_no"]);
        $SupervisedBy = trim($_POST["supervisd_by"]);
        $PatientComplain = trim($_POST["patient_complain"]);
        $Complain = trim($_POST["complain"]);
        $UpdatePatient = new patient();
        $UpdatePatient->Update($NAME , $Gender , $Age , $Job , $MaritalStatus , $NumberInFamily , $Address , $PhoneNumber , $HomeNumber , $SupervisedBy , $PatientComplain , $Complain);
        header("Location:afterlogin.php");
    }
?>
