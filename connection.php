<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test";

// Create connection

$conn = new mysqli('localhost','root','','test');
$firstname = ($_POST["name"]);
$email = ($_POST["email"]);
$comment = ($_POST["comment"]);
$gender = ($_POST["gender"]);
if($conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    echo "New record created successfully";
    $stmt = $conn->prepare("INSERT INTO users(f_name, email, comment, gender) values('$firstname', '$email', '$comment', '$gender')");
    $execval = $stmt->execute();
    $stmt->close();
    $conn->close();
}
else
{
    die("failed to connect !");
}
?>