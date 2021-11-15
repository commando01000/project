<?php
    public class Ranking
    {
        public $IRanking;
        function __construct($IRanking)
        {
            $this->IRanking = $IRanking;
        }
        public function Deco($id,$usertypeId)
        {
            return $this->IRanking->IRanking($id,$usertypeId);
        }
    }
    public class Rankup implements IRanking
    {

        function __construct()
        {
            
        }
        function Rankk($id,$usertypeId)
        {
        if(!$id=="")
        {
            $con=mysqli_connect("localhost","root","","project");
            if(!$con)
            {
                die("Couldnot Connect"). mysqli_error());
            }
            $sql = mysqli_query("SELECT *FROM admins WHERE id=$id");
            $ssql = mysqli_query($con,$sql);
            if($row =mysqli_fetch_arry($ssql))
            {
                $this->id = $id;
                $this->usertypeId = $usertypeId;
                if(  $usertypeId<3)
                {
                    $usertypeId++;
                    $sql = "UPDATE INTO Admins SET  usertypeId = '$usertypeId' WHERE id = '$id'";

                }
            }
        
        }
    }
    public class Rankdown implements IRanking
    {

        function __construct()
        {
            
        }
        function Rankk()
        {
            
            if(!$id=="")
            {
                $con=mysqli_connect("localhost","root","","project");
                if(!$con)
                {
                    die("Couldnot Connect"). mysqli_error());
                }
                $sql = mysqli_query("SELECT *FROM admins WHERE id=$id");
                $ssql = mysqli_query($con,$sql);
                if($row =mysqli_fetch_arry($ssql))
                {
                    $this->id = $id;
                    $this->usertypeId = $usertypeId;
                    if(  $usertypeId>1)
                    {
                        $usertypeId--;
                        $sql = "UPDATE INTO Admins SET  usertypeId = '$usertypeId' WHERE id = '$id'";
                    }
                }
            }
        }
    }
    public interface IRanking
    {
        public function Rankk($id,$usertypeId);
    }
?>
