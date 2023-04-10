<?php
// connect to the database
include'include/config.php';
// retrieve data from the form
$title = $_POST['title'];
$date = $_POST['date'];
$time = $_POST['time'];
$venue = $_POST['venue'];
$purpose = $_POST['purpose'];
$description = $_POST['description'];
$name = $_POST['name'];
$department = $_POST['department'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$availability = $_POST['availability'];
$explanation = $_POST['explanation'];
$role = implode(',', $_POST['role']);
$contribution = $_POST['contribution'];

// insert the data into the database
$sql = "INSERT INTO events (title, date, time, venue, purpose, description, name, department, email, phone, availability, explanation, role, contribution) VALUES ('$title', '$date', '$time', '$venue', '$purpose', '$description', '$name', '$department', '$email', '$phone', '$availability', '$explanation', '$role', '$contribution')";
if (mysqli_query($conn, $sql)) {
    echo 'Form data inserted successfully.';
    header("Location: staffaction.php");
    exit;
} else {
    echo 'Error inserting form data: ' . mysqli_error($conn);
}

// close the database connection
mysqli_close($conn);
?>
