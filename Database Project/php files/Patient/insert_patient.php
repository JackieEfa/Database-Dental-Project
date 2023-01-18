<html>
<head><title>Dental Office - Add New Patient</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Add a New Patient</h2>

  <form action="insertpatient.php" method=post>
  Patient ID: <input type=number name="ID" size=10 required><br><br>
  Patient Date of Birth: <input type=date name="dob" size=15 required><br><br>
  Patient Address: <input type=text name="address" size=50 required><br><br>
  Patient Phone: <input type=text name="phone" size=15 ><br><br>
  Patient Email: <input type=text name="email" size=25 ><br><br>
  Patient First Name: <input type=text name="first" size=15 required><br><br>
  Patient Last Name: <input type=text name="last" size=15 required><br><br>
  Patient Health Care Number: <input type=number name="hcn" size=15 required><br><br>
  <input type=submit name="submit" value="Insert"></form>

</body>
</html>
