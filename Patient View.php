<?php
class Patientview()
{
    function ShowPatientDetails($Patient)
    {
        echo "id: ".$Patient->id;
        echo "name: ".$Patient->NAME;
        echo "gender ".$Patient->Gender;
        echo "age ".$Patient->Age;
        echo "job ".$Patient->Job;
        echo "marital_status: ".$Patient->MaritalStatus;
        echo "number_in_family: ".$Patient->NumberInFamily;
        echo "addresss ".$Patient->Address;
        echo "phone_no ".$Patient->PhoneNumber;
        echo "home_no ".$Patient->HomeNumber;
        echo "supervised_by: ".$Patient->SupervisedBy;
        echo "patient_complain: ".$Patient->PatientComplain;
        echo "complain ".$Patient->Complain;
    }
}
?>