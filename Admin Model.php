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