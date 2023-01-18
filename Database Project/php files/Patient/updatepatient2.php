<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme';

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
$sql = "update PATIENT set ID='$_POST[ID]',dob='$_POST[dob]',address='$_POST[address]',
                     phone='$_POST[phone]',first='$_POST[first]',last='$_POST[last]',
                     hcn='$_POST[hcn]' where ID='$_POST[oldID]'";
if($conn->query($sql))
{
        echo "<h3> Patient updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p>Patient ID $_POST[ID] already exists!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"main.php\">Return</a> to Home Page.";
?>