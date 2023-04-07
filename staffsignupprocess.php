<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if password and confirm password match
    if ($password != $confirm_password) {
        echo "Error: Passwords do not match.";
        exit;
    }

    // Hash the password for security
  //  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Connect to the database
    $db_host = "localhost";
    $db_username = "root";
    $db_password = "toor";
    $db_name = "donatetheblood";

    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Insert the data into the database
    $sql = "INSERT INTO staff (name, email, password) VALUES ('$name', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
<a href="signin.php">Go to sign in</a>