<!DOCTYPE html>
<html>
<head>
	<title>Certificate of Appreciation for Blood Donation</title>
	<link rel="stylesheet" type="text/css" href="css/certificatestyle.css">
	<style>
	table {
		border-collapse: collapse;
		width: 100%;
		margin-bottom: 20px;
	}

	th, td {
		padding: 10px 30px;
		text-align: left;
	}

	th {
		background-color: #f2f2f2;
	}

	.signature {
		margin-top: 50px;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.signature .name {
		border-top: 0.5px dotted #333;
		padding-top: 0px;
	}

	.signatory {
		text-align: center;
	}

	.signatory p {
		margin: 0;
		font-size: 18px;
		font-weight: bold;
	}

	.signatory p:last-child {
		margin-top: 10px;
	}
	</style>
</head>
<body>
	<?php
include 'include/config.php';

// Query the donor data from the database
$sql = "SELECT * FROM donor_data";
$result = mysqli_query($conn, $sql);
$sql2 = "SELECT organizer FROM donor_data WHERE id=1"; // assuming the organizer's name is stored in a table named 'organizers' and has an ID of 1
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$organizer_name = $row2['organizer'];


// Check if any data is returned
if (mysqli_num_rows($result) > 0) {
	// Loop through the donor data and generate a certificate for each donor
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='certificate'>
		<label for='organizer'>Name of Organizer:</label>
<span >".$row['organizer']."</span><br>

		<h2 style='margin-bottom: 100px;'>Certificate of Appreciation for Blood Donation</h2>

			<form method='post'>
			<label for='username'>Name of Donor:</label>
			<span>".$row['username']."</span><br>
			

					<label for='bloodgroup'>Blood Group:</label>
					<span>".$row['bloodgroup']."</span><br>
			
					<label for='date'>Date of Donation:</label>
					<span>".$row['date']."</span><br>
			
				</form>
				<p>" . $organizer_name . " would like to express their sincere gratitude and appreciation to " . $row['username'] . " for their contribution in donating blood.</p>

<br><p style='margin-bottom:100px;'>This donation will help to save the lives of patients in need and has made a valuable contribution to the community. We thank you for your selfless act and encourage you to continue donating blood in the future.<br></p>
			
	?>
	<table>
	<tr>
	  <td>[Signature]</td>
	  
	  <td>[Signature]</td>
	  <td><?php
	  include 'include/config.php';
	
	  $sql = "SELECT * FROM donor_data";
	$result = mysqli_query($conn, $sql);
	$sql2 = "SELECT organizer FROM donor_data WHERE id=1"; // assuming the organizer's name is stored in a table named 'organizers' and has an ID of 1
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($result2);
	$organizer_name = $row2['organizer'];
	
	  
	
	  echo $organizer_name?></td>
	  
	  <td>[Organization Name]</td>
	  <td>[Address]</td>
	  <td>[Phone Number]</td>
	  <td>www.rcs.com.np</td>
	</tr>
	</table>
	
				
				</p>
			</div>";
		}
	}else{
		echo "No donor found.";
	}
	mysqli_close($conn);
	



</body>
</html>