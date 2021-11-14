<?php
    include_once 'Patient Model.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $NAME = $Gender = $Age = $Job = $Maritalstatus = $NumberInFamily = $Address = $PhoneNunber = $HomeNumber = $SupervisedBy = $PatientComplain = $Complain = "";
        $NAME = trim($_POST["name of patient"]);
        $Gender = trim($_POST["gender"]);
        $Age = trim($_POST["age of patient"]);
        $Job = trim($_POST["patient job"]);
        $Maritalstatus = trim($_POST["Enter Social status"]);
        $NumberInFamily = trim($_POST["rank"]);
        $Address = trim($_POST["Adress"]);
        $PhoneNumber = trim($_POST["mobile number"]);
        $HomeNumber = trim($_POST["Home number"]);
        $SupervisedBy = trim($_POST["Supervised by"]);
        $PatientComplain = trim($_POST["patient Complaint"]);
        $Complain = trim($_POST["Complaints of family and companions"]);
        $UpdatePatient = new patient();
        $UpdatePatient->Update($NAME , $Gender , $Age , $Job , $MaritalStatus , $NumberInFamily , $Address , $PhoneNumber , $HomeNumber , $SupervisedBy , $PatientComplain , $Complain);
        header("Location:afterlogin.php");
    }
?>
