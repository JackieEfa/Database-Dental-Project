<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   if($conn->connect_errno)
   {
      echo "Connection issues";
      exit; 
   }

   echo "<p>Date chosen: $_POST[date]</p>";
   $sql = "select email from APPOINTMENT, PATIENT where ID=pID and date='".$_POST[date]."'";
   
   $result = $conn->query($sql); 
   if($result->num_rows != 0) 
   { 	
      echo "<table border=1>";
      $rec = $result->fetch_assoc();
      
      echo "<tr>";
      echo "<td>$rec[email]</td>";
      echo "</tr>";

      echo "</table>";
   } else {
      
      echo "<p>Appointment date: $_POST[date] does not have any appointments!</p>"; 
   
   }

echo "<a href=\"main.php\">Return</a> to Home Page."; 

?>
