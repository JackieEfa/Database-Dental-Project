<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme'; 

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
$sql = "update INCLUDES set serID='$_POST[ID]' where pID='$_POST[oldID2]' and date='$_POST[oldDate]'";
if($conn->query($sql))
{
        echo "<h3> Updated Service Included in an Appointment!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p> Service already assigned to this appointment!</p>";
   } else {
      echo "error code $err";
   }
}

echo "<a href=\"main.php\">Return</a> to Home Page.";
?>