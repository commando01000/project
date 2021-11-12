<?php
class admins
    { //Mortaga
        public $id;
        public $name;
        public $usertypeObj; 
        public $username;
        public $password;
        function __construct($id)
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
                    $this->name=$row["name"];
                    $this->id = $id;
                    $this->username=$row["username"];
                    $this->password =$row["password"];
                    $this->usertypeObj= new usertype($row["usertype"]);
                }
            }
        }
        function insert($id,$name,$username,$password)
        {
            $con = mysqli_connect("localhost","root","","project");
            $sql="SELECT * FROM admins WHERE id = $id or name = $name or username = $username or password = $password";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num = 0)
            {
                $sql = "INSERT INTO admins(name,username,password) VALUES('$name','$username','$password')";
                mysqli_query($con,$sql) or die(mysql_error());
            }
        }
      
    }
?>
