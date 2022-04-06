<!--This is the php file for searching the array-->

<!--This is the php code that calls our php file-->
<$php include ('header.php'); ?>
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
