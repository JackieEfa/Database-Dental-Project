<html>
<head><title>Dental Office - Update an Appointment</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update an Appointment</h2>

<?php

   echo "<form action=\"updateappointment.php\" method=post>";

   $username = 'group1';
   $password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select time from APPOINTMENT where pID='$_POST[oldID]' and date='$_POST[date]'"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Select the time of the patient's appointment: <select name=\"time\">";
	      
      while($val = $result->fetch_assoc())
      {
	  echo "<option value='$val[time]'>$val[time]</option>";

      }
      echo "<input type=hidden name=\"oldID2\" value=\"$_POST[oldID]\">";
      echo "<input type=hidden name=\"oldDate\" value=\"$_POST[date]\">";
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