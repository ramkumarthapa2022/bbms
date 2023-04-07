<!DOCTYPE html>
<html>
<head>
	<title>Certificate of Appreciation for Blood Donation</title>
	<link rel="stylesheet" type="text/css" href="css/certificatestyle.css">
	<style>
		tyle>
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
	if(isset($_POST['generate'])) {
		$username = $_POST['username'];
		$bloodgroup = $_POST['bloodgroup'];
		$date = $_POST['date'];
		$amount = $_POST['amount'];
		
		// Generate certificate document
		$certificate = "<div class='certificate'>
			<h2>Certificate of Appreciation for Blood Donation</h2>
			<p>&nbsp&nbsp&nbspThis is to certify that <strong>$username</strong> has donated blood of <strong>$bloodgroup</strong> group and has made a valuable contribution towards saving lives.
			<table>
				<tr>
					<td>Date of Donation:</td>
					<td>$date</td>
				</tr>
				<tr>
					<td>Blood Group:</td>
					<td>$bloodgroup</td>
				</tr>
				<tr>
					<td>Amount Donated:</td>
					<td>$amount</td>
				</tr>
				</table>

<br>This donation will help to save the lives of patients in need and has made a valuable contribution to the community. We thank you for your selfless act and encourage you to continue donating blood in the future.<br>
			
<table>
<tr>
  <td>[Signature]</td>
  <td>[Organization Name]</td>
  <td>[Address]</td>
  <td>[Phone Number]</td>
  <td>www.rcs.com.np</td>
</tr>
</table>

			
			</p>
		</div>";
		// Display certificate
		echo $certificate;
	}
	?>
</body>
</html>