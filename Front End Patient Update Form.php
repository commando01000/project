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
<form method="post" action="PQ">
<div class="container">
<h1>Update profile for patient</h1>
<hr>
  New Name of patient: <input type="text" placeholder="Enter Name of patient" name="name of patient"required>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="Female">Female
  <input type="radio" name="gender" value="Male">Male
  <br><br>
  New Age of patient: <input type="text" placeholder="Enter age of patient" name="age of patient"required>
  <br><br>
  New Patient job: <input type="text" placeholder="Enter patient jop" name="patient job"required>
  <br><br>
  New Social status: <input type="text" name="Enter Social status" placeholder="Enter  Social status"required>
  <br><br>
  New Number in the family: <input type="text" name="rank" placeholder="Enter Number in the family" required>
  <br><br>
  New Adress: <input type="text" placeholder="Home Adress" name="Adress"required>
  <br><br>
  New Home number: <input type="number" placeholder="Enter Home number" name="Home number"required>
  <br><br>
  New mobile number: <input type="number" placeholder="Enter mobile number"name="mobile number" required>
  <br><br>
   New Supervised by: <input type="text" placeholder="Enter Supervised by"name="Supervised by" required>
  <br><br>
  New patient Complaints: <textarea name="patient Complaint" placeholder="Enter patient Complaint" rows="5" cols="40"required></textarea>
  <br><br>
  New Complaints of family and companions: <textarea name="Complaints of family and companions" placeholder="Enter Complaints of family and companions" rows="5" cols="40"required></textarea>
  <br><br>
  <input type="submit" class="registerbtn" name="submit" value="Next">  
  <hr>
  </div>
</form>
</body>
</html>
