<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme';

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

$sql = "update APPOINTMENT set date='$_POST[newDate]', time='$_POST[newTime]' where (pID, date, time) = ('$_POST[oldpID]','$_POST[oldDate2]','$_POST[oldTime2]')";
if($conn->query($sql))
{
        echo "<h3> Updated Appointment!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p> Date and time already set to this appointment!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"main.php\">Return</a> to Home Page.";
?>