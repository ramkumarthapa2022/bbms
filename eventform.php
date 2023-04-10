<html>
<head>
<title>Announcement Event Form</title>

<link rel="stylesheet" type="text/css" href="eventformstyle.css">

</head>
<body>

<h2>Announcement Event Form</h2>

<form action="eventformprocess.php" method="post">

<label for="title">Title of Event:</label><br>
<input type="text" id="title" name="title" required><br><br>

<label for="date">Date:</label><br>
<input type="date" id="date" name="date" required><br><br>

<label for="time">Time:</label><br>
<input type="time" id="time" name="time" required><br><br>

<label for="venue">Venue:</label><br>
<input type="text" id="venue" name="venue" required><br><br>

<label for="purpose">Purpose of Event:</label><br>
<textarea id="purpose" name="purpose" required></textarea><br><br>

<label for="description">Description of Event:</label><br>
<textarea id="description" name="description" required></textarea><br><br>

<h3>Staff Input Form:</h3>

<label for="name">Name:</label><br>
<input type="text" id="name" name="name" required><br><br>

<label for="department">Department:</label><br>
<input type="text" id="department" name="department" required><br><br>

<label for="email">Email:</label><br>
<input type="email" id="email" name="email" required><br><br>

<label for="phone">Phone Number:</label><br>
<input type="tel" id="phone" name="phone" required><br><br>

<label for="availability">Are you available on the date and time of the event?</label><br>
<input type="radio" id="yes" name="availability" value="yes" required>
<label for="yes">Yes</label><br>
<input type="radio" id="no" name="availability" value="no" required>
<label for="no">No</label><br><br>

<label for="explanation">If no, please provide an explanation:</label><br>
<textarea id="explanation" name="explanation"></textarea><br><br>

<label for="role">Please indicate your preferred role in the event:</label><br>
<input type="checkbox" id="speaker" name="role[]" value="speaker">
<label for="speaker">Speaker</label><br>
<input type="checkbox" id="panelist" name="role[]" value="panelist">
<label for="panelist">Panelist</label><br>
<input type="checkbox" id="volunteer" name="role[]" value="volunteer">
<label for="volunteer">Volunteer</label><br>
<input type="checkbox" id="other" name="role[]" value="other">
<label for="other">Other (please specify):</label>
<input type="text" id="other_role" name="other_role"><br><br>

<label for="contribution">Please provide a brief summary of your proposed contribution to the event:</label><br>
<textarea id="contribution" name="contribution" required></textarea><br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>
