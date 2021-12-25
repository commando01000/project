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

<form method="post" action="DonatorRegController.php">
<div class="container">

<h1>Make profile for Donator</h1>

<hr>
  UserID: <input type="text" placeholder="UserID" name="user_ID"required>
  <br><br>
   DonationTypeID:  <input type="text" placeholder="DonationTypeID" name="DonationType"required>
  <br><br>
  Qty:  <input type="text" placeholder="Type a Quantity" name="Qty"required>
  <br><br>
  <input type="submit" class="registerbtn" name="submit" value="Create">
</div>
</form>
</body>
</html>