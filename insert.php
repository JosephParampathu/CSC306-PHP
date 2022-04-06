<?php
//This connects to the database
      include("include/connectDB.php");
//variables from connectDB.php: $dbConn - connection object
//If the form is posted, then calculate the bill
      if(isset($_POST['frmSendBill']))
      {
        include("calculateBill.php");
      }
?>
