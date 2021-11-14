<?php
    include_once 'Patient Model.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name = $Gender = $Age = $Job = $Maritalstatus = $NumberInFamily = $Address = $MobileNumber = $HomeNumber = $SupervisedBy = $PatientComplain = $Complain = "";
        $name = trim($_POST["Name"]);
        $Gender = trim($_POST["gender"]);
        $Age = trim($_POST["age of patient"]);
        $Job = trim($_POST["patient job"]);
        $Maritalstatus = trim($_POST["Enter Social status"]);
        $NumberInFamily = trim($_POST["rank"]);
        $Address = trim($_POST["Adress"]);
        $MobileNumber = trim($_POST["mobile no."]);
        $HomeNumber = trim($_POST["Home no."]);
        $SupervisedBy = trim($_POST["Servant name"]);
        $PatientComplain = trim($_POST["patient Complaint"]);
        $Complain = trim($_POST["Complaints of family and companions"]);
        $UpdatePatient = new patient();
        $UpdatePatient->Update($name , $Gender , $Age , $Job , $MaritalStatus , $NumberInFamily , $Address , $MobileNumber , $HomeNumber , $SupervisedBy , $PatientComplain , $Complain );
        header('Location:afterlogin.php');
    }
?>
