<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "delete from APPOINTMENT where (pID, date, time) = ('$_POST[oldID2]', '$_POST[oldDate]', '$_POST[time]')"; 
   if($conn->query($sql)) 
   { 
	   echo "<h3> Appointment deleted!</h3>";
	
   } else {
      $err = $conn->errno; 
      $errtext = $conn->error;
      echo "You got an error code of $err.";
      echo "Text for this code: $errtext."; 
   }
   echo "<br><br><a href=\"main.php\">Return</a> to Home Page."; 
?>