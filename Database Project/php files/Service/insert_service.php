<html>
<head><title>Dental Office - Insert a Service</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
  <h2>Insert a New Service</h2>

<form action="insertservice.php" method=post>
Service ID: <input type=number name="ID" size=10 required> <br><br>
Serive Name: <input type=text name="name" size=30 required> <br><br>
Service Cost: <input type="number" step="0.01" min=0 name="cost" size=10> <br><br>
<input type=submit name="submit" value="Add Service"> 
</form>

</body>
</html>
