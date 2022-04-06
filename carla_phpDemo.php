<!--This webpage is used to enter search terms to query our array
It gives suggestions as the user looks for book ttiles in our array
-->
<?php include ('header.php'); ?>
<!--This is the webpage title-->
<title>Search Query Page</title>
<!--Include the css file-->
<link href="carla.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <!--This is the div element that holds our main content-->
<div id="content">
<h3>Enter the search query here to see which book titles match!</h3>
<!--This is the form that holds our search entries-->
<form>
<h3>First word: <input type="text" onkeyup="showHint(this.value)" /></h3>
</form>
<!--This is where the search suggestions are displayed-->
<h3>Search Suggestions: <span id="txtHint"></span></h3>
</div>
</body>
</html>
