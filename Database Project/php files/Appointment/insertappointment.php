<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';
$username = 'group1';
$password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username); 
   
   $sql = "insert into APPOINTMENT values ('$_POST[pID]','$_POST[date]','$_POST[time]')"; 
   if($conn->query($sql)) 
   { 
      $sql = "insert into INCLUDES values (1,'$_POST[pID]','$_POST[date]','$_POST[time]')";
      $conn->query($sql);
      $sql = "insert into ASSIGNED values (1,'$_POST[pID]','$_POST[date]','$_POST[time]')";
      $conn->query($sql);
      echo "<h3> Appointment with one service and one staff added!</h3>";
   }
   else {
      $err = $conn->errno; 
      if($err == 1062)
      {
	 echo "<p>Appointment $_POST[pID], $_POST[date], $_POST[time] already exists!</p>"; 
      }
      else {
	 echo "error number $err"; 
      }
      
   }
   echo "<a href=\"main.php\">Return</a> to Home Page.";
?>