<?php
// Get form data

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$blood_type = $_POST["blood-type"];

// Validate form data (you may want to add more validation checks)
$errors = array();
if (empty($name)) {
  $errors[] = "Name is required";
}
if (empty($email)) {
  $errors[] = "Email is required";
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = "Invalid email format";
}
if (empty($password)) {
  $errors[] = "Password is required";
}
if (empty($blood_type)) {
  $errors[] = "Blood type is required";
}

// If there are errors, display them
if (!empty($errors)) {
  echo "<h2>Please fix the following errors:</h2>";
  echo "<ul>";
  foreach ($errors as $error) {
    echo "<li>$error</li>";
  }
  echo "</ul>";
} else {
  // If there are no errors, save the data to database
  $host = 'localhost'; // Change this to your database host
  $dbname = 'donatetheblood'; // Change this to your database name
  $user = 'root'; // Change this to your database username
  $pass = 'toor'; // Change this to your database password
  $mysqli = new mysqli($host, $user, $pass, $dbname);

  // Check connection
  if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
  }

  // Prepare the SQL statement
  $stmt = $mysqli->prepare("INSERT INTO receptionists (name, email, password, blood_type) VALUES (?, ?, ?, ?)");

  // Bind the parameters
  $stmt->bind_param("ssss", $name, $email, $password, $blood_type);

  // Execute the statement
  if ($stmt->execute()) {
    // Display a success message
    echo "<h2>Thank you for signing up!</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Password: $password</p>";
    echo "<p>Blood Type: $blood_type</p>";
    echo '<button onclick="window.location.href=\'signin.php\'">Go to signin page</button>';
  } else {
    // Display an error message
    echo "<h2>Error:</h2>";
    echo "<p>" . $stmt->error . "</p>";
  }

  $stmt->close();
  $mysqli->close();
}
?>