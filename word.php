<?php
class word
{
    public $id;
    public $word;
    public $languageID;
    function __construct($id)
    {
        if($id != -1)
        {
            $con = mysqli_connect("localhost","root","","project 3");
            if($con)
            {
                $sql = "SELECT * FROM word WHERE id = $id";
                $sq = mysqli_query($con,$sql);
                $row = mysqli_fetch_array($sq);
                $this->id = $id;
                $this->word = $row["word"];
                $this->languageID = new languege($row["languageID"]);
            }
        }
    }
    
    function delete($id)
    {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * from word where id = '$id'";
        $row = mysqli_query($con,$sql);
        $num = mysqli_num_rows($row);
        if($num == 1)
        { 
            $sql = "DELETE FROM word WHERE  id = '$id'";
            $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        }
        $con->close();
    }
    
    function update($id,$name)
    {
        $con = mysqli_connect("localhost", "root", "", "project 3");
        $sql = "SELECT * from word where id ='$id'";
        $row = mysqli_query($con,$sql);
        $num = mysqli_num_rows($row);
        if($num == 1)
        {  
            $sql = "UPDATE word SET name ='$name' WHERE id ='$id'";
            $go = mysqli_query($con,$sql) or die (mysqli_error($con));
        }
        $con->close();
    }
    
    function insert($word)
    {
        $con = mysqli_connect("localhost","root","","project 3");
        if($con)
        {
            $sql = "SELECT * FROM word WHERE name = '$word'";
            $row = mysqli_query($con,$sql);
            $num = mysqli_num_rows($row);
            if($num == 0)
            {
                $sql = "INSERT INTO word(word) VALUES('$word')";
            }
            mysqli_query($con,$sql) or die(mysql_error());
        }
        $con->close();
    }
}
?>

