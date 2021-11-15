<?php
    public class donator
    {
        public $IPay;
        function __construct($IPay)
        {
            $this->IPay = $IPay;
        }
        public function executeStrategy($id,$donator_id,$amt,$type)
        {
            return $this->IPay->Pay($id,$donator_id,$amt,$type);
        }
    }
    public class Pay_With_Fawry implements IPay
    {
        function __construct()
        {
            
        }
        public function Pay($id,$donator_id,$amt,$type)
        {     
            $con = mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                $sql = "SELECT * FROM donation_items WHERE donator_id = '$donator_id' or amount = '$amt'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 0)
                {
                    if($type == "computer")
                    {
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',1)";
                    }
                    if($type == "money")
                    {
                        
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',1)";
                       
                        $sql = "INSERT INTO donation_item_details(donator_id,visa,cash,fawry) VALUES('$donator_id',0,0,'$amt')";
                        
                        
                    }
                    if($type == "blankets")
                    {
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',3)";
                    }
                    if($type == "mobile")
                    {
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',4)";
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
            function delete_donation($id)
            {
                $con = mysqli_connect("localhost", "root", "", "project");
                $sql = "SELECT * from donation_details where id = '$id'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 1)
                { 
                    $sql = "DELETE FROM donation_details WHERE  id = '$id'";
                    $go = mysqli_query($con,$sql) or die (mysqli_error($con));
                }
                else
                {
                    echo "user not found !";
                }
            }
            function delete_all_donations($donid)
            {
                $con = mysqli_connect("localhost", "root", "", "project");
                $sql = "SELECT * from donation_details where id = '$id'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 1)
                { 
                    $sql = "DELETE FROM donation_details WHERE  id = '$donator_id'";
                    $go = mysqli_query($con,$sql) or die (mysqli_error($con));
                }
                else
                {
                    echo "user not found !";
                }
            }
            function update_donation($id,$amt)
            {
                $con = mysqli_connect("localhost", "root", "", "project");
                $sql = "SELECT * from donation_details where id = '$id'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 1)
                { 
                    $sql = "UPDATE INTO donation_details SET amount = '$amt' WHERE id = '$donator_id'";
                    $go = mysqli_query($con,$sql) or die (mysqli_error($con));
                }
                else
                {
                    echo "user not found !";
                }
            }
    }
    public class Pay_With_Cash implements IPay
    {
        function __construct()
        {
            
        }
        public function Pay($id,$donator_id,$amt,$type) 
        {   
                $con = mysqli_connect("localhost","root","","project");
                if(!$con)
                {
                    die('Could not connect:' . mysqli_error());
                }
                else
                {
                    $sql = "SELECT * FROM donation_details WHERE donator_id = '$donator_id' or amount = '$amt'";
                    $row = mysqli_query($con,$sql);
                    $num = mysqli_num_rows($row);
                    if($num == 0)
                    {
                        if($type == "computer")
                        {
                            $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',1)";
                        }
                        if($type == "money")
                        {
                            
                            $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',1)";
                            $sql = "INSERT INTO donation_item_details(donator_id,visa,cash,fawry) VALUES('$donator_id',0,'$amt',0)";
                        }
                        if($type == "blankets")
                        {
                            $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',3)";
                        }
                        if($type == "mobile")
                        {
                            $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',4)";
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
        function update_donation($id,$amt)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_details where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "UPDATE INTO donation_details SET amount = '$amt' WHERE id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
    }
    public class Pay_With_Visa implements IPay
    {
        function __construct()
        {
            
        }
        public function Pay($id,$donator_id,$amt,$type) 
        {
            $con = mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            else
            {
                $sql = "SELECT * FROM donation_details WHERE donator_id = '$donator_id' or amount = '$amt'";
                $row = mysqli_query($con,$sql);
                $num = mysqli_num_rows($row);
                if($num == 0)
                {
                    if($type == "computer")
                    {
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',1)";
                    }
                    if($type == "money")
                    {
                        
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',1)";
                        $sql = "INSERT INTO donation_item_details(donator_id,visa,cash,fawry) VALUES('$donator_id','$amt',0,0)";
                    }
                    if($type == "blankets")
                    {
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',3)";
                    }
                    if($type == "mobile")
                    {
                        $sql = "INSERT INTO donation_details(donator_id,amount,item) VALUES('$donator_id','$amt',4)";
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
        function update_donation($id,$amt)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_details where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "UPDATE INTO donation_details SET amount = '$amt' WHERE id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
    }
    public interface IPay
    {
        public function Pay($id,$donator_id,$amt,$type);
    }
?>
