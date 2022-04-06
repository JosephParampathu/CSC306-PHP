<?php
//This connects to the database
      include("include/connectDB.php");
      //Connects to the doctor's database
      $dbObj = mysqli_select_db($dbConn, 'doctorWho');
        //This adds the SQL code we will use to pull information from the database table
        $sqlStatement="SELECT full_name, id FROM users ORDER BY created_at";
        //This processes the previous statement and stores it in result
        $result = mysqli_query($dbConn, $sqlStatement);

        if (!$result)
        {
          //Prints this error message if we fail to connect to the database or the SQL code is invalid
          die('Error: '. mysqli_error($dbConn));
        }
        //If the information was successfully grabbed from the database, it prints the results
        while ($row = mysqli_fetch_assoc($result))
        {
          printf("Full Name: %s (Patient_ID: %s)<br />", $row["full_name"], $row["id"]);
        }
        //This closes the database
        include("include/closeDB.php");
?>
