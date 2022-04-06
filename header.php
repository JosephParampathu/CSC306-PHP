<html>
<head>
<!--This is the webpage title-->
<title>Search Query Page</title>
<!--Include the css file-->
<link href="carla.css" rel="stylesheet" type="text/css" />
<script language="Javascript" type="text/Javascript">
function showHint(str)
{
  var url = "hints.php";
  //Returns nothing when nothing is in the search field
  if(str.length== 0)
  {
    document.getElementbyId("txtHint").innerHTML="";
    return;
  }
  //checks the Browser type
  if (window.XMLHttpRequest)
  {var xmlhttp = new XMLHttpRequest();} //For most modern browsers this will work to connect the web page to php script
  else
  {var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} //For older browsers this will work to connect the web page to php script
  xmlhttp.onreadystatechange = function()
  {
    if (xmlhtml.readystate == 4 && xmlhttp.status == 200)
    {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint.php?q = "+str,true);
  xmlhttp.send();
}
</script>
</head>
<body>
