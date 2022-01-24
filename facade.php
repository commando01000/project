<php
class pagefacade
{

    

    public function createandvalidate($username,$password,$type)
    {
        $a=0;
        
        $username = $password = $type = "";
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $type = trim($_POST["job"]);

        if ($typeofcheck == "1")
        {
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) 
            {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }
            else
            {
                $a=1;
            }
        } 

         
            $con = mysqli_connect("localhost","root","","project 3");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                if($a==1)
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
            }
            $con->close();
        
         

    }
}
?>