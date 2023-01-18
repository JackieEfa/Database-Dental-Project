<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

  $username = 'group1';
  $password = 'helpme';
   
   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "insert into SERVICE values ('$_POST[ID]','$_POST[name]','$_POST[cost]')"; 
   if($conn->query($sql)) 
   { 
   
      echo "<p>New Service added!</p> "; 
	
   } else {
      $err = $conn->errno; 
      if($err == 1062)
      {
	 echo "<p>This Service already exists!</p>";
      } else {
	 echo "error number $err"; 
      }
   
   }
   echo "<a href=\"main.php\">Return</a> to Home Page."; 
?>
