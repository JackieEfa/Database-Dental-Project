<html>
<head> <?php echo '<link rel="stylesheet" type="text/css" href="styles.css">'; ?>
</head>

<h1> <img src="tooth.png" alt="tooth"> Dental Office </h1>

<p>Select from one of the following operations:</p>

<ul>

  <h3>Patient Information and Operations</h3>
<li><a href="insert_patient.php">Insert a Patient</a></li>
<li><a href="update_patient.php">Update Information for a Patient</a></li>
<li><a href="select_patient.php">List Information for a Patient and their Appoinments</a></li>
<li><a href="delete_patient.php">Delete a Patient</a></li>
<br>

<h3>Staff Information and Operations</h3>
<li><a href="insert_staff.php">Insert a Staff Member</a></li>
<li><a href="update_staff.php">Update Information for a Staff Member</a></li>
<li><a href="select_staff.php">List Information for Staff Member and their Assigned Appoinments</a></li>
<li><a href="delete_staff.php">Delete a Staff Member</a></li>
<br>

<h3>Service Information and Operations</h3>
<li><a href="insert_service.php">Insert a Service</a></li>
<li><a href="update_service.php">Update Information for a Service</a></li>
<li><a href="select_service.php">List Information for a Service</a></li>
<li><a href="delete_service.php">Delete a Service</a></li>
<br>

<h3>Appointment Information and Operations</h3>
<li><a href="insert_appointment.php">Insert an Appointment</a></li>
<li><a href="update_appointment.php">Update Information for an Appoinment</a></li>
<li><a href="update_includes.php">Update a Service Included for an Appoinment</a></li>
<li><a href="update_assigned.php">Update Staff Assigned to an Appoinment</a></li>
<li><a href="select_apptbydate.php">List of all Appointments by Date</a></li>
<li><a href="delete_appointment.php">Delete an Appointment</a></li>
<br>

<h3>Appointment Reminders by Date</h3>
<li><a href="select_apptreminders.php">Get Emails for Appointment Reminders by Date</a></li>

</ul>
</html>