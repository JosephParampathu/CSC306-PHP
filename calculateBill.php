<?php
//This connects to the database
      include("include/connectDB.php");
      //Connects to the landscaping database
      $dbObj = mysqli_select_db($dbConn, 'leeslandscape');
        //This adds the SQL code we will use to pull matching information from the database table
        $sqlStatement="SELECT * FROM billing WHERE (customer_L_Name = '$_POST[patientLast]')";
        //This processes the previous statement and stores it in result
        $result = mysqli_query($dbConn, $sqlStatement);

        if (!$result)
        {
          //Prints this error message if we fail to connect to the database or the SQL code is invalid
          die('Error: '. mysqli_error($dbConn));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
          printf("Last Name: %s <br /> Customer ID: %s <br /> Bill Amount: %s <br /> Service: %s <br /> Amount Paid: %s <br /> Bill Date: %s <br /> Date Paid: %s <br />", $row["customer_L_Name"], $row["customer_ID"], $row["customer_bill"], $row["service"], $row["amt_paid"], $row["bill_date"], $row["date_paid"]);
          if ($row['customer_bill'] > $row['amt_paid'])
            {
              //Sends this email if the customer owes a biill
              $remaining = $row['customer_bill'] - $row['amt_paid'];
              $message = "You owe a bill to Lee's Landscaping of $" . $remaining . ". Please contact us to pay this bill. ";
              $from = "lee@landscaping.com";
              $headers = "From: " . $from;
              $sqlStatement2="SELECT * FROM customers WHERE (customer_L_Name = '$_POST[patientLast]')";
              $result2 = mysqli_query($dbConn, $sqlStatement2);
              if (!$result2)
              {
                //Prints this error message if we fail to connect to the database or the SQL code is invalid
                die('Error: '. mysqli_error($dbConn));
              }
              while ($row2 = mysqli_fetch_assoc($result2))
              {
                $to = $row2['customer_Email'];
              }
            }
            else
              {
                //Sends this email if the customer has paid their bills
                $message = "Thank you for your payment and your continued business with Lee's Landscaping. :)";
                $from = "lee@landscaping.com";
                $headers = "From: " . $from;
                $sqlStatement2="SELECT * FROM customers WHERE (customer_L_Name = '$_POST[patientLast]')";
                $result2 = mysqli_query($dbConn, $sqlStatement2);
                if (!$result2)
                {
                  //Prints this error message if we fail to connect to the database or the SQL code is invalid
                  die('Error: '. mysqli_error($dbConn));
                }
                while ($row2 = mysqli_fetch_assoc($result2))
                {
                  $to = $row2['customer_Email'];
                }
              }
            }
            mail($to, $subject, $message, $headers);
            printf("Mail Sent. ");


        //This closes the database
        include("include/closeDB.php");
?>
