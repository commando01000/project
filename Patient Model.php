<?php

class patient
{
    public $Id;
    public $Name;
    public $Gender;
    public $Age;
    public $Job;
    public $Social status;
    public $NumberInFamily;
    public $Address;
    public $PhoneNumber;
    public $HomeNumber;
    public $SupervisedBy;
    public $PatientComplain;
    public $Complain;
    function __construct()
    {

    }
    function Convert_Patient($Id)
    {
        if(!$Id == "")
        {
            $con = mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                $sql = "SELECT * FROM reg_patients WHERE id = $Id";
                $PatientData = mysqli_query($con,$sql);
                if($row = mysqli_fetch_array($PatientData))
                {
                    $this->Id = $row["id"];
                    $this->Name = $row["name"];
                    $this->Gender = $row["gender"];
                    $this->Age = $row["age"];
                    $this->Job = $row["job"];
                    $this->Social status = $row["marital_status"];
                    $this->NumberInFamily = $row["number_in_family"];
                    $this->Address = $row["addresss"];
                    $this->PhoneNumber = $row["phone_no"];
                    $this->HomeNumber = $row["home_no"];
                    $this->SupervisedBy = $row["supervised_by"];
                    $this->PatientComplain = $row["patient_complain"];
                    $this->Complain = $row["complain"];
                }
            }
        }
        $con->close();
    }
    function Delete($Id)
    {
        $con = mysqli_connect("localhost","root","","project");
        $sql = "SELECT * FROM reg_patients WHERE id = $Id";
        $row = mysqli_query($con,$sql);
        $search = mysqli_num_rows($row);
        if($search == 1)
        {
            $sql = "DELETE FROM reg_patients WHERE id = $Id";
            $do = mysqli_query($con,$sql);
        }
        else
        {
            echo "user not found";
        }
        $con->close();
    }
    function Update($ID,$NAME,$Gender,$Age,$Job,$Social status,$NumberInFamily,$Address,$PhoneNumber,$HomeNumber,$SupervisedBy,$PatientComplain,$Complain)
    {
        $con = mysqli_connect("localhost","root","","project");
        $sql = "SELECT * FROM reg_patients WHERE id = $Id";
        $row = mysqli_query($con,$sql);
        $search = mysqli_num_rows($row);
        if($search == 1)
        {
            $sql = "UPDATE reg_patients SET namee = $NAME , gender = $Gender , age = $Age , job = $Job , marital_status = $Social status , number_in_family = $NumberInFamily ,
             addresss = $Address , phone_no = $PhoneNumber , home_no = $HomeNumber , supervised_by = $SupervisedBy , patient_complain = $PatientComplain , complain = $Complain";
            $do = mysqli_query($con,$sql);
        }
        else
        {
            echo "user not found";
        }
        $con->close();
    }
    function Insert($NAME,$Gender,$Age,$Job,$Social status,$NumberInFamily,$Address,$PhoneNumber,$HomeNumber,$SupervisedBy,$PatientComplain,$Complain)
    {
        $con = mysqli_connect("localhost","root","","project");
        if(!$con)
        {
            die('Could not connect:' .mysqli_error());
        }
        else
        {
            $sql = "SELECT * FROM reg_patients WHERE namee = '$NAME' , gender = '$Gender' , age = '$Age' , job = '$Job' , marital_status = '$Social status' , number_in_family = '$NumberInFamily' ,
             addresss = '$Address' , phone_no = '$PhoneNumber' , home_no = '$HomeNumber' , supervised_by = '$SupervisedBy' , patient_complain = '$PatientComplain' , complain = '$Complain'";
            $do = mysqli_query($con,$sql);
            $search = mysqli_num_rows($row);
            if($search == 0)
            {
                $sql = "INSERT INTO reg_patients (namee,gender,age,job,marital_status,number_in_family,addresss,phone_no,home_no,supervised_by,patient_complain,comlain) VALUES('$Name','$Gender','$Age','$Job','$MaritalStatus','$NumberInFamily','$Address','$PhoneNumber','$HomeNumber','$SupervisedBy','$PatientComplain','$Complain')";
            }
        }
        $con->close();
    } 
}
?>
