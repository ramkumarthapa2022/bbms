<head>
<link rel="stylesheet" type="text/css" href="staffactionstyle.css">
</head>
    <body>
<?php
include 'include/header.php';
?>
<br><br>

    <h1>Welcome to your staff page</h1>
    <p>Here are some actions you can take:</p>
    <ul>
      <li><a href="staffprofile.php"><button class="btn btn-success">Show profile</button></a></li>
      <li><a href="staffupdate.php"><button class="btn btn-success">Update your profile information</button></a></li>
      <li><a href="listdonor.php"><button class="btn btn-success">List Donor</button></li>
      <li><a href="listrecipients.php"><button class="btn btn-success">List Receptionists</button></li>
      <li><a href="certificate.php"><button class="btn btn-success">Generate Certificate</button></li>
      
      <li><a href="eventform.php"><button class="btn btn-success">Have plans for events</button></li>  
      <li><a href="logout.php">Logout</a></li>
    </ul>
</body>