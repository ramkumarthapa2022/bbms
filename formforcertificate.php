<!DOCTYPE html>
<html>
<head>
	<title>Blood Donor Certificate</title>
	<link rel="stylesheet" type="text/css" href="css/styled.css">
</head>
<body>
	<h1>Blood Donor Certificate</h1>
	<form method="POST" action="formforcertificateprocess.php">
		<label for="organizer"> Donation Organizer:</label>
		<input type="text" name="organizer" id="organizer" required>
		<label for="username">Name of Donor:</label>
		<input type="text" name="username" id="username" required>
		<label for="bloodgroup">Blood Group:</label>
		<select name="bloodgroup" id="bloodgroup" required>
			<option value="">Select Blood Group</option>
			<option value="A+">A+</option>
			<option value="A-">A-</option>
			<option value="B+">B+</option>
			<option value="B-">B-</option>
			<option value="O+">O+</option>
			<option value="O-">O-</option>
			<option value="AB+">AB+</option>
			<option value="AB-">AB-</option>
		</select>

		<label for="age"> Age of Donor:</label>
		<input type="text" name="age" id="age" required>
		
		<br><br>
		<label for="date">Date of Donation:</label>
		<input type="date" name="date" id="date" required>
		<br><br>
		<input type="submit" name="submit" value="Add donor to List">
		<input type="button" value="List Donors" onclick="window.location.href='showdonortableprocess.php';">
		<input type="button" value="Next" onclick="window.location.href='formforcertificate.php';">
	</form>
</body>
</html>
