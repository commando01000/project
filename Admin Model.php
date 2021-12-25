<?php
    include_once 'user.php';
    class usertype
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
                $sql = "SELECT * FROM user_type WHERE id = $id";
                $s = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($s);
                $this->id = $id;
                $this->name = $row["name"];
            }
        }
        function delete($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from admins where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM user_type WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
            $con->close();
        }
        function update($id,$name)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from user_type where id ='$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            {  
                $sql = "UPDATE user_type SET name ='$name' WHERE id ='$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
            $con->close();
        }
        function insert($name)
        {
            $con = mysqli_connect("localhost","root","","project 3");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                $sql = "SELECT * FROM user_type WHERE name = '$name'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 0)
                {
                    $sql = "INSERT INTO user_type(name) VALUES('$name')";
                }
                else
                {
                    echo "user already exists ! ";
                }
                mysqli_query($con,$sql) or die(mysql_error());
                echo "Registered Successfully ! ";
            }
            $con->close();
        }
    }
    class admin
    {
        public $id;
        public $username;
        public $password;
        public $usertype_id;
        function __construct($id)
        {
            if($id != -1)
            {
                $con = mysqli_connect("localhost","root","","project 3");
                if(!$con)
                {
                    die('Could not connect:' . mysqli_error());
                }
                $sql = "SELECT * FROM admin WHERE id = $id";
                $S = mysqli_query($con,$sql);
                if($row = mysqli_fetch_array($S))
                {
                    $this->id = $id;
                    $this->username = $row["username"];
                    $this->password = $row["password"];
                    $this->usertype_id = new usertype($row["usertype_id"]);
                }
                $con->close();
            }
        }
        function delete($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from admin where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM admin WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
            $con->close();
        }
        function update($id,$username,$password,$usertype_id)
        {
            $con = mysqli_connect("localhost", "root", "", "project 3");
            $sql = "SELECT * from admin where id ='$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            {  
                $sql2 = "UPDATE admin SET username = '$username' , password = '$password' ,usertype_id = '$usertype_id' WHERE id ='$id'";
                $go = mysqli_query($con,$sql2) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
            $con->close();
        }
        function insert($username,$password,$type)
        {
            $con = mysqli_connect("localhost","root","","project 3");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                $sql = "SELECT * FROM admin WHERE username = '$username' or password = '$password'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 0)
                {
                    if($type == "Servent")
                    {
                        $sql = "INSERT INTO admin(username,password,usertype_id) VALUES('$username','$password',2)";
                    }
                    if($type == "Supervisor")
                    {
                        $sql = "INSERT INTO admin(username,password,usertype_id) VALUES('$username','$password',1)";
                    }
                    if($type == "Head Of Servents")
                    {
                        $sql = "INSERT INTO admin(username,password,usertype_id) VALUES('$username','$password',3)";
                    }
                }
                else
                {
                    echo "user already exists ! ";
                }
                mysqli_query($con,$sql) or die(mysql_error());
                echo "Registered Successfully ! ";
            }
            $con->close();
        }
    }
?>

