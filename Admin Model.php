<?php
    class usertype
    {
        public $id;
        public $name;
        function __construct()
        {
            
        }  
        function convert_Admin($id)
        {
            if(!$id == "")
            {
                $con = mysqli_connect("localhost","root","","project");
                if(!$con)
                {
                    die('Could not connect:' . mysqli_error());
                }
                $sql="SELECT * FROM admins WHERE id = $id";
                $UserDataSet = mysqli_query($con,$sql);
                if($row = mysqli_fetch_array($UserDataSet))
                {
                    $this->name = $row["name"];
                    $this->id = $id;
                }
            }
        }
        function delete($id,$name)
        {
            $link = mysqli_connect("localhost", "root", "", "project");
            $sql = "DELETE FROM admins WHERE namee = '$name' or id = '$id'";
            $run = mysqli_query($link,$sql) or die (mysqli_error($con));
            echo "Record have been deleted successfully !";
        }
        function update ($id,$name)
        {
           $link = mysqli_connect("localhost", "root", "", "project");
           $query = "SELECT * from admins where id='$id'";
           $run = mysqli_query($link,$query) or die (mysqli_error($con));
           $query1="UPDATE admins SET name='$name', id='$id' WHERE id='$id'";

            if (mysqli_query($con, $query1)) 
            {
               echo "updated";
            }
            else 
            {
                echo "not updated";
            }
        }
    }
    class admin
    {
        public $id;
        public $name;
        public $username;
        public $password;
        public $usertypeObj;
        function __construct()
        {
            
        }
        function Convert_Admin($id)
        {
            if(!$id == "")
            {
                $con = mysqli_connect("localhost","root","","project");
                if(!$con)
                {
                    die('Could not connect:' . mysqli_error());
                }
                $sql="SELECT * FROM admins WHERE id = $id";
                $UserDataSet = mysqli_query($con,$sql);
                if($row = mysqli_fetch_array($UserDataSet))
                {
                    $this->name=$row["namee"];
                    $this->id = $id;
                    $this->username=$row["username"];
                    $this->password =$row["passwordd"];
                    $this->usertypeObj = new usertype($row["usertypeID"]);
                }
            }
        }
        function delete($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from admins where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM admins WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
         function update($id,$name,$username,$password)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from admins where id='$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            {
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));  
                $sql2 = "UPDATE admins SET namee ='$name' , username = '$username' , passwordd = '$password' WHERE id ='$id'";
                $go = mysqli_query($con,$sql2) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function insert($name,$username,$password,$type)
        {
            $con = mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                $sql = "SELECT * FROM admins WHERE namee = '$name' or username = '$username' or passwordd = '$password'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 0)
                {
                    if($type == "Servent")
                    {
                        $sql = "INSERT INTO admins(namee,usertypeID,username,passwordd) VALUES('$name',2,'$username','$password')";
                    }
                    if($type == "Supervisor")
                    {
                        $sql = "INSERT INTO admins(namee,usertypeID,username,passwordd) VALUES('$name',1,'$username','$password')";
                    }
                    if($type == "Head Of Servents")
                    {
                        $sql = "INSERT INTO admins(namee,usertypeID,username,passwordd) VALUES('$name',3,'$username','$password')";
                    }
                }
                else
                {
                    echo "user already exists ! ";
                }
                mysqli_query($con,$sql) or die(mysql_error());
                echo "Registered Successfully ! ";
            }
       }
    }
?>
