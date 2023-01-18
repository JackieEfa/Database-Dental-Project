<?php 

echo '<link rel="stylesheet" type="text/css" href="styles.css">';

$username = 'group1';
$password = 'helpme';

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
   
   $sql = "delete from SERVICE where ID='$_POST[ID]'"; 
   if($conn->query($sql)) 
   { 
	echo "<h3> Service deleted!</h3>";
	
   } else {
      $err = $conn->errno; 
      $errtxt = $conn->error; 
      if($err == 1451)
      {
	 echo "<h3>Cannot delete Service $_POST[ID]!</h3>"; 
	 echo "One or more $_POST[ID] Service have appointments assigned to them."; 
      }
      else {
	 echo "you got an error code of $err. $errtxt"; 
      }
   }
   echo "<br><br><a href=\"main.php\">Return</a> to Home Page."; 

?>
