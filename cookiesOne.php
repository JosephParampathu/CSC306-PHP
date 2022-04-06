<?php
$username = $_POST['name'];
$userage = $_POST['age'];
$usergender = $_POST['gender'];
setcookie("name", $username, time() + 60*60*24*7);
setcookie("age", $userage, time() + 60*60*24*7);
setcookie("gender", $usergender, time() + 60*60*24*7);
?>

<!--This displays the information retrieved from the cookie:-->

<html>
<head>
<title>Cookie Check!</title>
</head>
<body>
<h2>I can see a cookie on your machine</h2>
<h2>This is the information inside: </h2>
<h3>Your name: <?php echo ($username) ?></h3>
<h3>Your age: <?php echo ($userage) ?></h3>
<h3>Your gender: <?php echo ($usergender) ?></h3>
</body>
</html>
