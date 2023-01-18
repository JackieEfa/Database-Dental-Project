<html>
<head><title>Dental Office - Update a Service</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update a Service</h2>

<?php
echo "<form action=\"updateservice2.php\" method=post>";
	
$username = 'group1';
$password = 'helpme';

	$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
	if($conn->connect_errno)
	{
	   echo "Connection Problem!";
	   exit; 
	}
	
	$sql = "select * from SERVICE where ID='$_POST[ID]'";

	$result = $conn->query($sql);
	if(!$result)
	{
	   echo "Problem executing select!";
	   exit; 
	}
        if($result->num_rows!= 0)
	{
	   $rec=$result->fetch_assoc(); 
	   echo "Serivce ID: <input type=number name=\"ID\" value=\"$rec[ID]\"><br><br>";
	   echo "Service Name: <input type=text name=\"name\" value=\"$rec[name]\"><br><br>";
	   echo "Service Cost: <input type=number step=\"0.01\" min=0 name=\"cost\" value=\"$rec[cost]\"><br><br>";
	   echo "<input type=hidden name=\"oldID\" value=\"$_POST[ID]\">";
	   echo "<input type=submit name=\"submit\" value=\"Update\">"; 

	}
	else
	{
		echo "<p>Please enter service data.  ;) </p>"; 
	}

	echo "</form>";
echo "<a href=\"main.php\">Return</a> to Home Page.";
?>
