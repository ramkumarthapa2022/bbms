<?php
// Establish a connection to the database
include 'include/config.php';

// Get the donor id from the URL parameter
$id = $_GET['id'];

// Delete the donor record from the database
$sql = "DELETE FROM donor_data WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Donor deleted successfully";
    header("Location: index.php");
    exit();
} else {
    echo "Error deleting donor: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
