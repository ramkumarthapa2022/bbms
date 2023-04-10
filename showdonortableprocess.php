<html>
<head>

<link rel="stylesheet" type="text/css" href="showdonortableprocessstyle.css">
</head>
<body>
<?php
// Establish a connection to the database
include 'include/config.php';

// Query the donor data from the database
$sql = "SELECT * FROM donor_data";
$result = mysqli_query($conn, $sql);
// Calculate total blood collected
$total_bloodamount = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $total_bloodamount += $row['bloodamount'];
}
$sql = "SELECT * FROM donor_data";
$result = mysqli_query($conn, $sql);
// Check if any data is returned

if (mysqli_num_rows($result) > 0) {
    // Display the data in an HTML table
    echo "<table>";
    echo "<tr><th>ID</th><th>Organizer</th><th>Name of Donor</th><th>Blood Group</th><th>Age</th><th>Date of Donation</th><th>Make Changes</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['organizer'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['bloodgroup'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
        echo "<td><a href='deletedonorfromtable.php?id=" . $row['id'] . "' class='delete-button'>Delete Donor</a></td>";        
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No donor data found.";
}


// Close the database connection
mysqli_close($conn);
?>
<div class="center">
<div class="button-box">
<span class="total-blood">Total Blood Collected: <?php echo $total_bloodamount; ?> ml</span>
  <a href="certificateprocess.php" class="generate-certificate-button">Generate Certificate</a>
</div>
</div>

</body>
<html>