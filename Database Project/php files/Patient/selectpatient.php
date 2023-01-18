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

   echo "<p>Patient ID $_POST[ID]</p>";
   $sql = "select * from PATIENT where ID ='".$_POST[ID]."'";
   
   $result = $conn->query($sql); 
   if($result->num_rows != 0) 
   { 	
      echo "<table border=1>";
      $rec = $result->fetch_assoc();
      
      echo "<tr>";
      echo "<th>ID</th>";
      echo "<th>Date of Birth</th>";
      echo "<th>Address</th>";
      echo "<th>Phone Number</th>";
      echo "<th>Email</th>";
      echo "<th>First Name</th>";
      echo "<th>Last Name</th>";
      echo "<th>Health Care Number</th>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>$rec[ID]</td>";
      echo "<td>$rec[dob]</td>";
      echo "<td>$rec[address]</td>";
      echo "<td>$rec[phone]</td>";
      echo "<td>$rec[email]</td>";
      echo "<td>$rec[first]</td>";
      echo "<td>$rec[last]</td>";
      echo "<td>$rec[hcn]</td>";
      echo "</tr>";

      echo "</table>";

      $sql = "select * from APPOINTMENT where pID='".$_POST[ID]."'";
      $result = $conn->query($sql);
      if($result->num_rows != 0)
      {
	 echo "<br><br> Appointments for Patient ID  $rec[ID]: <br><br>";
	 echo "<table border=1>";
	 while($rec = $result->fetch_assoc())
	 { 
	    echo "<tr>";
       echo "<th>ID</th>";
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
	 echo "<p> The Patient ID: $_POST[ID] doesn't have any appointments.</p>";
      }
   } else {
      
      echo "<p>Patient ID $_POST[ID] does not exist!</p>"; 
   
   }

echo "<br><br>";
echo "<a href=\"main.php\">Return</a> to Home Page."; 

?>
