<?php

//This fills the array that we will search for book title suggestions
$arr = array(0 => 'Oblomov', 1 => 'Anna Karenina', 2 => 'Of Mice and Men', 3 => 'Through the Looking Glass',
  4 => 'Frankenstein', 5 => 'The Picture of Dorian Gray', 6 => 'Crime and Punishment', 7 => 'The Count of Monte Cristo',
 8 => 'Confessions', 9 => 'Pride and Prejudice', 10 => 'Farenheit 451', 11 => 'Animal Farm',
  12 => '1984', 13 => 'Next of Kin', 14 => 'Lady of the Flowers', 15 => 'The Bible',
  16 => 'Anarchy, the State, and Utopia', 17 => 'Les Miserables', 18 => 'Today\'s Gourmet', 19 => 'The Origin of Species');
//This is the array where will store any suggestions
$results = array();
//get the q parameter from URL pushed by searchpage.html when user enters

$q=$_GET["q"];
//This is our conditional logic to search for matches. We change the search query and array to lower case to ignore case
//And we fill our suggestions with any matches
foreach ($arr as $value) {
   if (str_contains(strtolower($value), strtolower($q)) !== false) { $results[] = $value; }
}
//If there is no matches our default message will be no matches
if( empty($results) ) { echo 'No matches found.'; }
else { echo " Suggestions: " . implode('; ', $results); }

?>
