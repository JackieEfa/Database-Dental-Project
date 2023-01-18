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
   $sql = "select * from STAFF where ID ='".$_POST[ID]."'";
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
      echo "<th>Position</th>";
      echo "<th>Salary</th>";
      echo "</tr>";

      echo "<tr>";
      echo "<td>$rec[ID]</td>";
      echo "<td>$rec[dob]</td>";
      echo "<td>$rec[address]</td>"; 
      echo "<td>$rec[phone]</td>";
      echo "<td>$rec[email]</td>";
      echo "<td>$rec[first]</td>";
      echo "<td>$rec[last]</td>";
      echo "<td>$rec[position]</td>";
      echo "<td>$rec[salary]</td>";
      echo "</tr>";
	
      echo "</table>";
   

      $sql = "select * from ASSIGNED where sID='".$_POST[ID]."'";
      $result = $conn->query($sql);
      if($result->num_rows != 0)
      {
	 echo "<br><br> Appointments Assigned to Staff ID  $rec[ID]: <br><br>";
	 echo "<table border=1>";
	 while($rec = $result->fetch_assoc())
	 { 
      echo "<tr>";
      echo "<th>Staff ID</th>";
      echo "<th>Patient ID</th>";
      echo "<th>Date</th>";
      echo "<th>Time</th>";
      echo "</tr>";

	    echo "<tr>";
	    echo "<td>$rec[sID]</td>";
	    echo "<td>$rec[pID]</td>";
	    echo "<td>$rec[date]</td>"; 
	    echo "<td>$rec[time]</td>"; 
	    echo "</tr>";
	 }
	 echo "</table>"; 
      }
   
      else {
	 echo "<p> The Staff ID: $_POST[ID] isn't assigned to any appointments.</p>";
      }
   } else {
      
      echo "<p>Staff ID:  $_POST[ID] does not exist!</p>"; 
   
   }
echo "<br><br>";
echo "<a href=\"main.php\">Return</a> to Home Page."; 

?>
