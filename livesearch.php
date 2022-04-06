<?php
//This is a php file which calls the array, searches it, and pushes the hints to the suggestions box
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('item');

//get the q parameter from URL pushed by searchpage.html when user enters
$q=$_GET["q"];

//If the string enetered is a positive length, then search it against the array and display results

if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint= $y->item(0)->childNodes->item(0)->nodeValue;
        } else {
          $hint=$hint . "<br />" .
          $y->item(0)->childNodes->item(0)->nodeValue;
        }
      }
    }
  }
}

// Set default output for if there are no matches
if ($hint=="") {
  $response="No Matching Titles";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>
