<html>
<head><title>Dental Office - Update a Patient</title>
<?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>
<body>
<h2>Update a Patient</h2> 

<?php

echo "<form action=\"updatepatient2.php\" method=post>";

$username = 'group1';
$password = 'helpme';

$conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
if($conn->connect_errno)
{
   echo "Connection Problem!";
   exit;
}

$sql = "select * from PATIENT where ID='$_POST[ID]'";

$result = $conn->query($sql);

if(!$result)
{
   echo "Problem executing select!";
   exit;
} 

if($result->num_rows!= 0)
{
   $rec=$result->fetch_assoc();
   echo "Patient ID: <input type=number name=\"ID\" value=\"$rec[ID]\"><br><br>";
echo "Patient Date of Birth: <input type=date name=\"dob\" value=\"$rec[dob]\"><br><br>";
echo "Patient Address: <input type=text name=\"address\" value=\"$rec[address]\"><br><br>";
echo "Patient Phone: <input type=text name=\"phone\" value=\"$rec[phone]\"><br><br>";
echo "Patient Email: <input type=text name=\"email\" value=\"$rec[email]\"><br><br>";
echo "Patient First Name: <input type=text name=\"first\" value=\"$rec[first]\"><br><br>";
echo "Patient Last Name: <input type=text name=\"last\" value=\"$rec[last]\"><br><br>";
echo "Patient Health Care Number: <input type=number name=\"hcn\" value=\"$rec[hcn]\"><br><br>";
   echo "<input type=hidden name=\"oldID\" value=\"$_POST[ID]\">";
   echo "<input type=submit name=\"submit\" value=\"Update\">";

}
else
{
        echo "<p>Umm...you may want to enter some data. ;) </p>";
}

echo "</form>";

echo "<a href=\"main.php\">Return</a> to Home Page.";
?>