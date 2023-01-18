<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme';

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
if($mysqli->connect_errno)
{
   echo "Connection Issue!";
   exit; 
}

$sql = "insert into PATIENT values ('$_POST[ID]','$_POST[dob]','$_POST[address]','$_POST[phone]','$_POST[email]','$_POST[first]','$_POST[last]','$_POST[hcn]')"; 
if($conn->query($sql))  
{ 
	echo "<h3> Patient was added!</h3>";

} else {
   $err = $conn->errno; 
   if($err == 1062)
   {
      echo "<p>Patient ID  $_POST[ID] already exists!</p>"; 
   } else {
      echo "<p>MySQL error code $err </p>"; 
   }
}
echo "<a href=\"main.php\">Return</a> to Home Page.";
?>