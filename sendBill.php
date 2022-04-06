<?php include ('insert.php'); ?>
<html>
<head>
  <title>Lee's Landscaping Check and Send Bill</title>
</head>
<body>
  <p>Check the Customer's Bill:</p>
  <!--Form to send bill and display customer's bill. If the bill is paid it will send a retention email.-->
  <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method ="post">
  <table>
    <tr>
      <td><hr />
        Enter Patient's Last Name:
      </td>
      <td><input type = "text" name = "patientLast" />
      </td>
    </tr>
  <tr>
    <td>
      <input type="submit" name="frmSendBill">
    </td>
  </tr>
  </table>
  </form>
</body>
</html>
