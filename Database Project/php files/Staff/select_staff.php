<html>
<head><title>Dental Office - List a Staff Member</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>List a Staff Member and Their Assigned Appointments</h2>
<?php

   echo "<form action=\"selectstaff.php\" method=post>";
		
   $username = 'group1';
   $password = 'helpme';
   
   $conn = new mysqli('vconroy.cs.uleth.ca',$username,$password, $username);
   if($conn->connect_errno)
   {
      echo "Error connecting!";
      exit; 
   }

   $sql = "select ID from STAFF"; 
   $result = $conn->query($sql);

   if(!$result)
   {
      echo "Problem with processing query";
      exit; 
   } else if($result->num_rows > 0)
   {
      echo "Staff ID: <select name=\"ID\">";
	      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='".$val['ID']."'>".$val['ID']."</option>"; 
	      
      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"View\">"; 
   }
   else
   {
      echo "<p>There are no Staff in the system!</p>"; 
   }
   
   echo "</form>";

?>
 
</body>
</html>
