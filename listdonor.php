<?php
include 'include/header.php';
include 'include/config.php';
if(!isset($_SESSION))
{
session_start();
}
// Connect to the database
//$servername = "localhost";
//$username = "root";
//$password = "toor";
//$dbname = "donatetheblood";
//$conn = new mysqli($servername, $username, $password, $dbname);
//if ($conn->connect_error) {
  //die("Connection failed: " . $conn->connect_error);
//}

// Check if user is logged in and is staff
if (!isset($_SESSION['id']) || $_SESSION['role_id'] !== 2) {
    header('Location: signin.php');
    exit;
}


// Fetch donor data from the database
$sql = "SELECT * FROM donor";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>List Donors</title>
	<link rel="stylesheet" type="text/css" href="listdonorstyle.css">
</head>
<body>
	<header>
		<h1>Blood Bank Management System</h1>
		<nav>
			<a href="dashboard.php">Dashboard</a>
			<a href="staff.php">Add Staff</a>
			<a href="listdonor.php">List Donors</a>
			<a href="include/logout.php">Sign Out</a>
		</nav>
	</header>

	<main>
		<h2>List of Donors</h2>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Contact Number</th>
				<th>Blood Group</th>
				<th>City</th>
			</tr>
			<?php
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row["id"]."</td>";
					echo "<td>".$row["name"]."</td>";
					echo "<td>".$row["email"]."</td>";
					echo "<td>".$row["contact_no"]."</td>";
					echo "<td>".$row["blood_group"]."</td>";
					echo "<td>".$row["city"]."</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='6'>No donors found</td></tr>";
			}
			?>
		</table>
	</main>

	<footer>
		<p>Copyright &copy; <?php echo date("Y"); ?>
		All rights reserved. Licenses.</p>
	</footer>
</body>
</html>

<?php
$conn->close();
?>
