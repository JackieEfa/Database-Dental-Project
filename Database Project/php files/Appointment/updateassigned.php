<html>
<head><title>Dental Office - Assign Staff to an Appointment</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Assign Staff to an Appointment</h2>

<?php
echo "<form action=\"updateassigned2.php\" method=post>";
	
$username = 'group1';
$password = 'helpme';  

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit; 
	}

	$sql = "select ID from STAFF"; 
  	 $result = $conn->query($sql);

   	if(!$result)
   	{
      		echo "Problem with processing query";
      		exit; 
   	}
   	else if($result->num_rows != 0)
   	{
      		echo "Assign Appointment to Staff: <select name=\"ID\">";
	      
      		while($val = $result->fetch_assoc())
      		{
	 		echo "<option value='".$val['ID']."'>".$val['ID']."</option>"; 	      
      		}
					echo "<input type=hidden name=\"oldID2\" value=\"$_POST[oldID]\">";
					echo "<input type=hidden name=\"oldDate\" value=\"$_POST[date]\">";
					echo "<input type=submit name=\"submit\" value=\"Update\">"; 
	}
	else
	{
		echo "<p>Please enter appointment data.  ;) </p>"; 
	}

	echo "</form>";
echo "<a href=\"main.php\">Return</a> to Home Page.";
?>