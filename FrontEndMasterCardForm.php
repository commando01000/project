<html>
<head>
  <link rel="stylesheet" href="cssF.css">
</head>
        <body>
  <ul>
  <li><a href="index">Home</a></li>
  </ul>
        
        <form method="post" action="MasterCardController.php">
            <div class="container">
            <h1>MasterCard</h1>
            <p>Please fill in this form to pay by MasterCard.</p>
            <hr>
            Enter CVV: <input type="number" placeholder="Enter  CVV" name="CVV"required>
            <br><br>
            Enter Expiration Date: <input type="date" name="exp_date" placeholder="Enter Expiration Date"required>
            <br><br>
            Enter Card Number: <input type="text" name="card_no" placeholder="Enter Card Number"required>
            <br><br>
            Enter ID: <input type="number" name="id" placeholder="Enter ID"required>
            <br><br>
            <input type="submit" class="registerbtn" name="submit" value="Confirm">
            <hr>
            </div>
        </form>
        </body>
</html>

