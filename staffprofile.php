<?php
include 'include/header.php';
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

// Fetch staff data from the database
$sql = "SELECT * FROM staff WHERE id = $id"; // replace 1 with the ID of the staff you want to fetch
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
} else {
  echo "No staff found";
  exit;
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>staff Profile</title>
	<link rel="stylesheet" type="text/css" href="staffprofilestyle.css">
</head>
<body>
	<h1>staff Profile</h1>
	<div class="profile">
		<div class="info">
			<h2><?php echo $row["name"]; ?></h2>
			<p><strong>Email:</strong> <?php echo $row["email"]; ?></p>
		</div>
		<div class="name">
			<?php echo $row["name"]; ?>
            <div class="button-block">
			  <a href="dashboard.php" class="button-link">Go Back</a>
 			 <a href="staffupdate.php" class="button-link">Make Changes</a>
			</div>

		</div>
	</div>
</body>
</html>
