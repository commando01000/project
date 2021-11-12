<?php
    class usertype
    {
        public $id;
        public $name;
       
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
                  
                }
            }
        }  
        public function delete($id,$name)
        {
            $con = mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
            $sql = "DELETE FROM Register WHERE namee = '$name' or id = '$id'" ;
            $run = mysqli_query($con,$query) or die (mysqli_error($con));
            echo "Record have been deleted successfully !";
        }

        public function update ($id,$name)
        {
         
            $con = mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die('Could not connect:' . mysqli_error());
            }
           $query= "SELECT * from card_rec where id='$id'";
           $run = mysqli_query($con,$query) or die (mysqli_error($con));



           $query1="UPDATE card_rec SET name='$name', id='$id' WHERE id='$id'";

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
    class admins
    {
        public $id;
        public $name;
        public $usertypeObj; 
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
                    $this->usertypeObj= new usertype($row["usertype"]);
                }
            }
        }
    }
?>