<?php include ('assets/insert.php'); ?>
<html>
<head>
  <title>Doctor Who's Patients | Add New Patients</title>
</head>
<body>
  <p>Add a new patient to Doctor Who's database:</p>
  <form action = "<?php echo $_SERVER['PHP_SELF'];?>" method ="post">
  <table>
    <tr>
      <td><hr />
        Enter patient's full name:
      </td>
      <td><input type = "text" name = "patientName" />
      </td>
    </tr>
    <tr>
      <td><hr />
        Enter patient's email:
      </td>
      <td><input type = "text" name = "patientEmail" />
      </td>
    </tr>
    <tr>
      <td><hr />
        Enter patient's gender:
      </td>
      <td><input type = "text" name = "patientGender" />
      </td>
    </tr>
    <tr>
      <td><hr />
        Enter patient's date of birth:
      </td>
      <td><input type = "text" name = "patientDOB" />
      </td>
    </tr>
    <tr>
      <td><hr />
        Enter patient's country:
      </td>
      <td><input type = "text" name = "patientCountry" />
      </td>
    </tr>
  <tr>
    <td>
      <input type="submit" name="frmAddPatient">
    </td>
  </tr>
  </table>
  </form>

</body>
</html>
