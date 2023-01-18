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

   echo "<p>$_POST[ID]</p>";
   $sql = "select * from SERVICE where ID ='".$_POST[ID]."'";

   $result = $conn->query($sql); 
   if($result->num_rows != 0) 
   { 	
      echo "<table border=1>";
      $rec = $result->fetch_assoc();
	 
      echo "<tr>";
       echo "<th>ID</th>";
       echo "<th>Name</th>";
       echo "<th>Cost</th>";
       echo "</tr>";
      
      echo "<tr>";
      echo "<td>$rec[ID]</td>";
      echo "<td>$rec[name]</td>";
      echo "<td>$rec[cost]</td>"; 
      echo "</tr>";
	
      echo "</table>";
   

      $sql = "select * from INCLUDES where ID='".$_POST[ID]."'";
      $result = $conn->query($sql);
      if($result->num_rows != 0)
      {
	 echo "<br><br> Service $rec[ID] Included in Appointment: <br><br>";
	 echo "<table border=1>";
	 while($rec = $result->fetch_assoc())
	 { 
       echo "<tr>";
       echo "<th>Patient ID</th>";
       echo "<th>Date</th>";
       echo "<th>Time</th>";
       echo "</tr>";

	    echo "<tr>";
	    echo "<td>$rec[pID]</td>";
	    echo "<td>$rec[date]</td>"; 
	    echo "<td>$rec[time]</td>"; 
	    echo "</tr>";
	 }
	 echo "</table>"; 
      }
   
      else {
	 echo "<p> The Service ID: $_POST[ID] isn't assigned to any appointments.</p>";
      }
   }
   else {
      
      echo "<p>Service ID:  $_POST[ID] does not exist!</p>"; 
   
   }

   echo '<br><br>';
echo "<a href=\"main.php\">Return</a> to Home Page."; 

?>
