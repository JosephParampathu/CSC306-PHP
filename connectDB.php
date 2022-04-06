<?php
//This connects to the localhost
  $dbConn = mysqli_connect('localhost', 'root', 'password');
  if (!$dbConn)
  {
    //If the connection is unsuccessful print the error
    die('Could not connect: ' . mysqli_error($dbConn));
  }
  //Connects to the doctor's database
  $dbObj = mysqli_select_db($dbConn, 'leeslandscape');
?>
