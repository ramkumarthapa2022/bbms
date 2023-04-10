<html>
<head>
<link rel="stylesheet" type="text/css" href="searchstyle.css">
</head>
<body>
    <?php

include 'include/config.php';
// Retrieve search parameters from form
$city = $_GET['city'];
$blood_group = $_GET['blood_group'];

// Prepare SQL query to select donors with matching city and blood group
$sql = "SELECT * FROM donor WHERE city='$city' AND blood_group='$blood_group'";

// Execute query
$result = mysqli_query($conn, $sql);

// Check if any matching donors found
if (mysqli_num_rows($result) > 0) {
    // Output table of donors
    echo '<table>';
    echo '<tr><th>Name</th><th>Email</th><th>Phone</th></tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr><td>' . $row['name'] . '</td><td>' . $row['email'] . '</td><td>' . $row['phone'] . '</td></tr>';
    }
    echo '</table>';
} else {
    // No matching donors found
    echo 'No donors found matching the selected city and blood group.';
}

// Close connection
mysqli_close($conn);
?>
</body>
</html>