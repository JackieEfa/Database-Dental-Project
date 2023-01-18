<html>
<head><title>Dental Office - Update an Appointment</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update an Appointment</h2>

<?php
echo "<form action=\"updateappointment2.php\" method=post>";
	
$username = 'group1';
$password = 'helpme';  

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit; 
	}

	$sql = "select * from APPOINTMENT where (pID, date, time) = ('$_POST[oldID2]','$_POST[oldDate]','$_POST[time]')";
  $result = $conn->query($sql);

   	if(!$result)
   	{
      		echo "Problem with processing query";
      		exit; 
   	}
   	else if($result->num_rows != 0)
   	{
      $rec=$result->fetch_assoc();
      echo "Appointment date: <input type=date name=\"newDate\" size=8> <br><br>";
      echo "Appointment time: <input type=time name=\"newTime\" size=20> <br><br>";
      echo "<input type=hidden name=\"oldpID\" value=\"$_POST[oldID2]\">";
			echo "<input type=hidden name=\"oldDate2\" value=\"$_POST[oldDate]\">";
			echo "<input type=hidden name=\"oldTime2\" value=\"$_POST[time]\">";
	    echo "<input type=submit name=\"submit\" value=\"Update\">"; 

	}
	else
	{
		echo "<p>There are no appointments to update!</p>"; 
	}

	echo "</form>";
echo "<a href=\"main.php\">Return</a> to Home Page.";
?>