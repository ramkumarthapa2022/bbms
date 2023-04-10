<?php
// Establish a connection to the database
include 'include/config.php';
?>
<?php
// If the form is submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $organizer = $_POST['organizer'];
    $username = $_POST['username'];
    $bloodgroup = $_POST['bloodgroup'];
    $age = $_POST['age'];
    $date = $_POST['date'];

    // Insert the form data into the database
    $sql = "INSERT INTO donor_data (organizer, username, bloodgroup, age, date) VALUES ('$organizer', '$username', '$bloodgroup', '$age', '$date')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
        header("Location: formforcertificate.php");
        exit;


    } else {
        echo "Error inserting data: " . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>
