<!DOCTYPE HTML>
<html>

<body>

<?php

// define variables and set to empty values

$firstname = $email = $gender = $comment = $website = "";
$ct1 = 0;
// Include config file
require_once "connection.php";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $firstname = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $comment = trim($_POST["comment"]);
  $gender = trim($_POST["gender"]);
  if(empty($firstname) && empty($email)&& empty($comment) && empty($gender))
  {
      $name_err = "Please enter a valid name.";
      $email_err = "Please enter a valid email.";
      $comment_err = "Please enter a valid comment.";
      $gender_err = "Please enter a valid gender.";
  }
  else
  {
    $sql = ("INSERT INTO users(f_name, email, comment, gender) VALUES('$firstname', '$email', '$comment', '$gender')");
    if($stmt = mysqli_prepare($link, $sql))
    {
            if(mysqli_stmt_execute($stmt))
            {
              // Records created successfully. Redirect to landing page
              echo "Records added successfully.";
              header("location: n.html");
              exit();
            } 
            else 
            {
                echo "Something went wrong. Please try again later.";
            }
    }
    else
    {
        echo "Something went wrong. Please try again later.";
    }
    // Close statement
    mysqli_stmt_close($stmt);
  }
  // Close connection
  mysqli_close($link);
}
?>

<h2>PHP Form Validation Example</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  Name: <input type="text" name="name"required>
  <br><br>
  E-mail: <input type="text" name="email"required>
  <br><br>
  Website: <input type="text" name="website"required>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
</form>
</body>
</html>