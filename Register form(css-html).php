<html>
<head>
</head>
<body>  



<h1>Register</h1>
 <p>Please fill in this form to create an account.</p>

<form method="post" action="Untitled-2.php">
<div class="container">
<hr>
  Name: <input type="text" placeholder="Enter Name" name="name"required>
  <br><br>
  E-mail: <input type="text" placeholder="E-mail" name="email"required>
  <br><br>
  Website: <input type="text" placeholder="Enter Website" name="website"required>
  <br><br>
  Comment: <textarea name="comment" placeholder="Enter Comment" rows="5" cols="40"required></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <input type="radio" name="gender" value="Other">Other
  <br><br>
  <input type="submit" class="registerbtn" name="submit" value="Submit">  
  <hr>
  </div>
</form>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: White;
  margin-right: 600;
  margin-left: 600;
  margin-top: 80;
}
.container {
  padding: 16px;
  background-color: white;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
input[type=text], textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
.registerbtn:hover {
  opacity: 1;
}
</style>

</body>
</html>
