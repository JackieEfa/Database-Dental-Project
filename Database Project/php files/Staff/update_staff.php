<html>
<head><title>Dental Office - Update A Staff Member</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update a Staff Member</h2>

<?php
   echo "<form action=\"updatestaff.php\" method=post>";

 $username = 'group1';
$password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "select ID from STAFF";
   $result = $conn->query($sql);
   if($result->num_rows != 0)
   {
      echo "STAFF ID: <select name=\"ID\">";

      while($val = $result->fetch_assoc())
      {
         echo "<option value='$val[ID]'>$val[ID]</option>";

      }
      echo "</select>";
      echo "<input type=submit name=\"submit\" value=\"View\">";
   }
   else
   {
      echo "<p>Umm...you may want to enter some data. ;) </p>";
   }

   echo "</form>";
?>