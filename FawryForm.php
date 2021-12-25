<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
<head>
  <link rel="stylesheet" href="cssF.css">
</head>
  <ul>
  <li><a href="index">Home</a></li>
  <li><a href="LoginFA">Login</a></li>
  <li><a href="#contact">  </a></li>
  </ul>


    <body>
        
        <form method="post"  action="FawryController.php">
            <div class="container">
            <h1>Fawry</h1>
            <p>Please fill in this form to pay by Fawry.</p>
            <hr>
            Code: <input type="number" placeholder="Enter  Code" name="Code"required>
            <br><br>
            Account Number: <input type="number" name="AccountNumber" placeholder="Enter Account Number"required>
            <br><br>
            Name of Donator: <input type="text" name="name" placeholder="Enter Name"required>
            <br><br>
            <input type="submit" class="registerbtn" name="submit" value="Confirm">  
            <hr>
            </div>
        </form>
        
    </body>
</html>
