<html>
<head><title>Dental Office - Add A New Staff Member</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Add a New Staff Member</h2>
<form action="insertstaff.php" method=post>
Staff ID: <input type=number name="ID" size=10 required><br><br>
Staff Date of Birth: <input type=date name="dob" size=15 required><br><br>
Staff Address: <input type=text name="address" size=50 required><br><br>
Staff Phone: <input type=text name="phone" size=15><br><br>
Staff Email: <input type=text name="email" size=25><br><br>
Staff First Name: <input type=text name="first" size=15 required><br><br>
Staff Last Name: <input type=text name="last" size=15 required><br><br>
Staff Position: <input type=text name="position" size=15><br><br>
Staff Salary: <input type=number step=0.01 min=0 name="salary" size=10><br><br>
<input type=submit name="submit" value="Insert"></form>
</body>
</html>