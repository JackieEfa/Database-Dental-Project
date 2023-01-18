<html>
<head><title>Dental Office - Delete a Service</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
   <h2>Delete a Service</h2>

<?php

   echo "<form action=\"deleteservice.php\" method=post>";

	$username = 'group1';
$password = 'helpme';
   
   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select name from SERVICE"; 
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
     echo "Service: <select name=\"name\">";
      
      while($val = $result->fetch_assoc())
      {
	 echo "<option value='$val[name]'>$val[name]</option>"; 
	 
      }
      echo "</select>"; 
      echo "<input type=submit name=\"submit\" value=\"Delete\">"; 
   }
   else
   {
      echo "<p>No Services! </p>"; 
   }
   
   echo "</form>";
?>
