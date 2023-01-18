<?php

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username='group1';
$password='helpme';	

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
$sql = "update SERVICE set ID='$_POST[ID]',name='$_POST[name]',cost='$_POST[cost]'
	where ID='$_POST[oldID]'";
if($conn->query($sql))
{
        echo "<h3> Service updated!</h3>";

} else {
   $err = $conn->errno();
   if($err == 1062)
   {
      echo "<p>Service ID $_POST[ID] already exists!</p>";
   } else {
      echo "error code $err";
   }

}

echo "<a href=\"main.php\">Return</a> to Home Page.";
?>
