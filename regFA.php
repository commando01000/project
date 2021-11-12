<html>
<head>
</head>
<body>  

<head>
  <link rel="stylesheet" href="cssF.css">
</head>
<ul>
  <li><a href="index">Home</a></li>
  <li><a href="LoginFA">Login</a></li>
  <li><a href="afterlogin">Choose your action</a></li>
  </ul>

<form method="post" action="Admin Controller.php">
<div class="container">
<h1>Register for Admins</h1>
 <p>Please fill in this form to create an account.</p>


<hr>
  Name: <input type="text" placeholder="Enter Name" name="Name"required>
  <br><br>
  Username: <input type="text" placeholder="Enter Username" name="Username"required>
  <br><br>
  Password: <input type="Password" name="Password" placeholder="Enter Password"required>
  <br><br>

  <input type="radio" name="type" value="Servant">Servant
  <input type="radio" name="type" value="Supervisor">Supervisor
  <input type="radio" name="type" value="Head Of Servents">Head Of Servents
  <br><br>
  <input type="submit" class="registerbtn" name="submit" value="Create Account">  
  <hr>
  </div>
</form>

</body><!-- Mortaga -->
</html>
