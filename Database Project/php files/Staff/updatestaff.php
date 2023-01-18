<html>
<head><title>Dental Office - Update a Staff Member</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update a Staff Member</h2>

<?php

echo "<form action=\"updatestaff2.php\" method=post>";

$username = 'group1';
$password = 'helpme';

        $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
        if($conn->connect_errno)
        {
           echo "Connection Problem!";
           exit;
        }

        $sql = "select * from STAFF where ID='$_POST[ID]'";

        $result = $conn->query($sql);
        if(!$result)
        {
           echo "Problem executing select!";
           exit;
        }
        if($result->num_rows!= 0)
        {
           $rec=$result->fetch_assoc();
           echo "Staff ID: <input type=number name=\"ID\" value=\"$rec[ID]\"><br><br>";
 	   echo "Staff Date of Birth: <input type=date name=\"dob\" value=\"$rec[dob]\"><br><br>";
	   echo "Staff Address: <input type=text name=\"address\" value=\"$rec[address]\"><br><br>";
	   echo "Staff Phone: <input type=text name=\"phone\" value=\"$rec[phone]\"><br><br>";
 	   echo "Staff Email: <input type=text name=\"email\" value=\"$rec[email]\"><br><br>";
	   echo "Staff First Name: <input type=text name=\"first\" value=\"$rec[first]\"><br><br>";
	   echo "Staff Last Name: <input type=text name=\"last\" value=\"$rec[last]\"><br><br>";
 	   echo "Staff Position: <input type=text name=\"position\" value=\"$rec[position]\"><br><br>";
	   echo "Staff Salary: <input type=number step=\"0.01\" min=0 name=\"salary\" value=\"$rec[salary]\"><br><br>";
           echo "<input type=hidden name=\"oldID\" value=\"$_POST[ID]\">";
           echo "<input type=submit name=\"submit\" value=\"Update\">";

        }
        else
        {
                echo "<p>Umm...you may want to enter some data. ;) </p>";
        }

        echo "</form>";
?>