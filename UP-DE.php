<?php
function delete($id,$name)
{
    $con = mysqli_connect("localhost", "root", "", "project");
    $sql = "SELECT * from admins where id='$id'or namee = '$name'"; 
    $row = mysqli_query($con,$sql);
    $num = mysqli_num_rows($row);
    if($num == 0)
    {
        $go = mysqli_query($con,$sql) or die (mysqli_error($con));  
        $sql = "DELETE FROM admins WHERE namee = '$name' or id = '$id'";
        $go = mysqli_query($con,$sql) or die (mysqli_error($con));
    }

}
function update ($id,$name)
{
    $con = mysqli_connect("localhost", "root", "", "project");
    $sql = "SELECT * from admins where id='$id'or namee = '$name'";
    $row = mysqli_query($con,$sql);
    $num = mysqli_num_rows($row);
    if($num == 0)
    {
        $go = mysqli_query($con,$sql) or die (mysqli_error($con));  
        $sql2="UPDATE admins SET name='$name'WHERE id='$id'";
        $go = mysqli_query($con,$sql2) or die (mysqli_error($con));
    }
}
?>
