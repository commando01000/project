<?php
include_once 'user.php';
class Donation_Type
{
    public $id;
    public $name;
    function __construct($id)
    {
        if($id != -1)
        {
            $con = mysqli_connect("localhost","root","","project 3");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            $sql="SELECT * FROM donation_type WHERE id = $id";
            $ItemDataSet = mysqli_query($con,$sql);
            if($row = mysqli_fetch_array($ItemDataSet))
            {
                $this->id = $id;
                $this->name = $row["name"];
            }
            $con->close();
        }
    }
        function insert($name)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from donation_type where name = '$name'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 0)
            {
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
                $sql2 = "INSERT INTO donation_type(name) VALUES ('$name')";
                $go = mysqli_query($con,$sql2) or die (mysqli_error($con));
            }
            else
            {
                echo "item already exists ";
            }
            $con->close();
        }
        function delete($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from donation_type where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_type WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "item not found !";
            }
            $con->close();
        }
        function update($id,$name)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from donation_type where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            {
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
                $sql2 = "UPDATE donation_type SET name ='$name'  WHERE id ='$id'";
                $go = mysqli_query($con,$sql2) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
            $con->close();
        }
        public static function List_All_Items()
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * FROM donation_type";
            $ItemsDataSet = mysqli_query($con,$sql);
            $i = 0;
            $Result;
            while($row = mysqli_fetch_array($ItemsDataSet))
            {
                $MyObj = new Donation_Type($row["id"]);
                $Result[$i] = $MyObj;
                $i++;
            }
            return $Result;
        }
    }
 class Donator
 {
     public $id;
     public $user_id;
     public $Donation_TypeID;
     function __construct($id)
     {
        if($id != -1)
        {
           $con = mysqli_connect("localhost","root","","project 3");
           if(!$con)
           {
               die('Could not connect:' . mysqli_error());
           }
           $sql="SELECT * FROM donator WHERE id = $id";
           $UserDataSet = mysqli_query($con,$sql);
           if($row = mysqli_fetch_array($UserDataSet))
           {
              $this->id = $id;
              $this->user_id = new user($row["user_id"]);
              $this->Donation_TypeID = $row["Donation_TypeID"];
           }
        }
     }
    function insert($user_id,$DonationTypeID)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' . mysqli_error());
        }
        else
        {
            $sql = "INSERT INTO donator(user_id,Donation_TypeID) VALUES('$user_id','$DonationTypeID')";
            mysqli_query($con,$sql) or die (mysqli_error($con));
            echo "Registered Successfully ! ";
        }
        $con->close();
    }
    function delete($user_id)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if(!$con)
        {
            die('Could not connect:' . mysqli_error());
        }
        else
        {
            $sql = "DELETE FROM donator WHERE id = '$user_id'";
            mysqli_query($con,$sql) or die (mysqli_error($con));
            echo "Registered Successfully ! ";
        }
        $con->close();
    }
}
?>
