<?php

if(!isset($_SESSION))
{
session_start();
}
$id = $_SESSION['id'];
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "donatetheblood";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch donor data from the database
$sql = "SELECT * FROM donor WHERE id = $id"; // replace 1 with the ID of the donor you want to fetch
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "No donor found";
  exit;
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donor Profile</title>
	<link rel="stylesheet" type="text/css" href="donorprofilestyle.css">
</head>
<body>
	<h1>Donor Profile</h1>
	<div class="profile">
		<div class="info">
			<h2><?php echo $row["name"]; ?></h2>
			<p><strong>Email:</strong> <?php echo $row["email"]; ?></p>
			<p><strong>Phone:</strong> <?php echo $row["contact_no"]; ?></p>
			<p><strong>Blood Group:</strong> <?php echo $row["blood_group"]; ?></p>
			<p><strong>City:</strong> <?php echo $row["city"]; ?></p>
		</div>
		<div class="name">
			<?php echo $row["name"]; ?>
            <a href="dashboard.php">Go Back</a>
            <a href="donorupdate.php">Make Changes</a>
		</div>
	</div>
</body>
</html>
