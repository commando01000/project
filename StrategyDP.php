<?php
    public class donator
    {
        public $IPay;
        function __construct($IPay)
        {
            $this->IPay = $IPay;
        }
        public function executeStrategy($x)
        {
            return $this->IPay->Pay($x);
        }
    }
    public class Pay_With_Fawry implements IPay
    {
        function __construct()
        {
            
        }
        function delete_donation($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function delete_all_donations($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function update_donation($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        public function Pay($x) 
        {
            
        }
    }
    public class Pay_With_Cash implements IPay
    {
        function __construct()
        {
            
        }
        function delete_donation($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function delete_all_donations($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function update_donation($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        public function Pay($x) 
        {
            
        }
    }
    public class Pay_With_Visa implements IPay
    {
        function __construct()
        {
            
        }
        function delete_donation($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function delete_all_donations($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        function update_donation($id)
        {
            $con = mysqli_connect("localhost", "root", "", "project");
            $sql = "SELECT * from donation_items where id = '$id'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 1)
            { 
                $sql = "DELETE FROM donation_items WHERE  id = '$donator_id'";
                $go = mysqli_query($con,$sql) or die (mysqli_error($con));
            }
            else
            {
                echo "user not found !";
            }
        }
        public function Pay($x) 
        {
            
        }
    }
    public interface IPay
    {
        public function Pay($x);
    }
?>
