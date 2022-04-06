<?php
session_start(); //This starts the session

//This fills the array with book titles
$a = array();
$a[]="Oblomov";
$a[]="The Bible";
$a[]="Les Miserables";
$a[]="The Origin of Species";
$a[]="Today's Gourmet";
$a[]="Anarchy, the State, and Utopia";
$a[]="Lady of the Flowers";
$a[]="Next of Kin";
$a[]="1984";
$a[]="Animal Farm";
$a[]="Farenheit 451";
$a[]="Confessions";
$a[]="Pride and Prejudice";
$a[]="The Count of Monte Cristo";
$a[]="The Picture of Dorian Gray";
$a[]="Crime and Punishment";
$a[]="Frankenstein";
$a[]="Through the Looking Glass";
$a[]="Of Mice and Men";
$a[]="Anna Karenina";

//Get the query parameter from the URL
$q = $_GET["q"];

//lookup the query in the array
if (strlen($q) > 0)
{
  $hint="";
  for(i=0; $i<19; i++)
  {
    if (strtolower($q) == strtolower(substr($a[$i],0,strlen($q))))
    {
      if($hint=="")
      {
        $hint$a[$i];
      }
      else
      {
        $hint = $hint." ; ".$a[$i];
      }
    }
  }
}
//Default output if no selections are found that match the query
if ($hint == "")
{
  $response="no matches found";
}
else
{
  $response = $hint;
}
//Print the response
echo $response;
?>
