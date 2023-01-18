<html>
<head><title>Dental Office - Add an Appointment</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Add an Appointment</h2>


<?php

   echo "<form action=\"insertappointment.php\" method=post>";
   
   $username = 'group1';
   $password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	
   $sql = "select ID from PATIENT"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Appointment date: <input type=date name=\"date\" size=8> <br><br>";
      echo "Appointment time: <input type=time name=\"time\" size=20> <br><br>";
      echo "Patient ID: <select name=\"pID\">";
      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[ID]'>$val[ID]</option>"; 
	 
      }
	
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"Add an Appointment\">";
	 
   }

   else
   {
      echo "<H3>There are no Patients in the system! </H3>"; 
   }
   
   echo "</form>";
?>
</body>
</html>
