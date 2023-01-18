<html>
<head><title>Dental Office - Assign Staff to an Appointment</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Assign Staff to an Appointment</h2>

<?php

   echo "<form action=\"updateassigneddate.php\" method=post>";

   $username = 'group1';
   $password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select ID from PATIENT"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Select Patient to add a Staff to their appointment: <select name=\"ID\">";
	      
      while($val = $result->fetch_assoc())
      {
	  echo "<option value='$val[ID]'>$val[ID]</option>";

      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"View\">"; 
   }
   else
   {
      echo "<p>There are no patients in the database </p>"; 
   }

   echo "</form>";
?>
 
</body>
</html>