<html>
<head><title>Dental Office - Update a Patient</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update a Patient</h2>

<?php

   echo "<form action=\"updatepatient.php\" method=post>";
   
   $username = 'group1';
   $password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select ID from PATIENT"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "Patient ID: <select name=\"ID\">";
	      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[ID]'>$val[ID]</option>"; 

      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"View\">"; 
   }
   else
   {
      echo "<p>There are no patients to update! </p>"; 
   }

   echo "</form>";
?>

</body>
</html>
