<!DOCTYPE html>
<html>
<head>
	<title>Certificate of Appreciation for Blood Donation</title>
	<link rel="stylesheet" type="text/css" href="stylec.css">
</head>
<body>
	<?php
	if(isset($_POST['generate'])) {
		$username = $_POST['username'];
		$bloodgroup = $_POST['bloodgroup'];

		// Generate certificate document
		$certificate = "<div class='certificate'>
			<h2>Certificate of Appreciation for Blood Donation</h2>

			<p>&nbsp&nbsp&nbspThis is to certify that <strong>$username</strong> has donated blood of <strong>$bloodgroup</strong> group and has made a valuable contribution towards saving lives.
			<br>Date of Donation: [Date]<br>
            <br>Type of Donation: [Whole Blood/Plasma/Platelets]<br>
            <br>Blood Group: [Blood Group]<br>
            <br>Amount Donated: [Amount]<br>
<br>This donation has helped to save the lives of patients in need and has made a valuable contribution to the community. We thank you for your selfless act and encourage you to continue donating blood in the future.<br>
			<br>Signed,<br>

			<br>[Signature]<br>
			
			<br>[Organization Name]<br>
			<br>[Address]<br>
			<br>[Phone Number]<br>
			<br>[Website]<br>
			</p>
			
	




		</div>";

		// Display certificate
		echo $certificate;
	}
	?>


</body>
</html>

