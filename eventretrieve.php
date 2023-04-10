<?php
// Retrieve events from the database
include 'include/config.php';

$sql = "SELECT * FROM events";
$result = mysqli_query($conn, $sql);

// Display events on the front page
if (mysqli_num_rows($result) > 0) {
  echo "<h2>Upcoming Events</h2>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<h3>" . $row["title"] . "</h3>";
    echo "<p><strong>Date:</strong> " . $row["date"] . "</p>";
    echo "<p><strong>Time:</strong> " . $row["time"] . "</p>";
    echo "<p><strong>Venue:</strong> " . $row["venue"] . "</p>";
    echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
  }
} else {
  echo "<p>No upcoming events.</p>";
}

mysqli_close($conn);
?>
