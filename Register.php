<!DOCTYPE HTML>
<html>

<body>

<?php

// define variables and set to empty values

$firstname = $email = $gender = $comment = $website = "";

?>

<h2>PHP Form Validation Example</h2>
<form action="connection.php" method="post">
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