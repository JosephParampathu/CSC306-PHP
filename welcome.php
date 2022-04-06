<?php

session_start(); //This starts the session
//This is the first logic test to check if the credentials are proper
if ($_POST["username"]=="name" && $_POST["password"]=="pass")
{
  $_SESSION["Login"] = "YES";
  echo "<h1>You have successfully logged in.</h1>"; //If both are true, the user has logged in, display the success message
}
//This is if the logic test resolves to false and the credentials were not correct
else {
  echo "<h1>The credentials you entered do not match any in our files.</h1>"; //If user fails to login, explain what happened
}
?>
