<html>
<head><title>Dental Office - List a Patient</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>

<body>
<h2>List a Patient and Their Appointments</h2>

<?php

   echo "<form action=\"selectpatient.php\" method=post>";

   $username = 'group1';
   $password = 'helpme';
   
   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   if($conn->connect_errno)
   {
      echo "Error connecting!";
      exit; 
   }

   $sql = "select ID from PATIENT"; 
   $result = $conn->query($sql);

   if(!$result)
   {
      echo "Problem with processing query";
      exit; 
   } else if($result->num_rows > 0)
   {
      echo "Patient ID: <select name=\"ID\">";
      
      while($val = $result->fetch_assoc())
      {
         echo "<option value='".$val['ID']."'>".$val['ID']."</option>"; 
      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"View\">"; 
   }
   else
   {
      echo "<p>There are no Patients in the system!</p>"; 
   }

   echo "</form>"; 
?>
 
</body>
</html>
