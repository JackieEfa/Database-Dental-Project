<html>
<head><title>Dental Office - Update an Appointment</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update an Appointment</h2>

<?php

   echo "<form action=\"updateappointmenttime.php\" method=post>";

   $username = 'group1';
   $password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select date from APPOINTMENT where pID='$_POST[ID]'"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Select the date of the patient's appointment: <select name=\"date\">";
	      
      while($val = $result->fetch_assoc())
      {
	  echo "<option value='$val[date]'>$val[date]</option>";

      }
      echo "<input type=hidden name=\"oldID\" value=\"$_POST[ID]\">";
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"View\">"; 
   }
   else
   {
      echo "<p>There are no appointments for this patient </p>"; 
   }

   echo "</form>";
?>
 
</body>
</html>