<head>
  <link rel="stylesheet" href="eventsectionstyle.css">
</head>

<section>
  <h2>Upcoming Events</h2>
  <ul>
    <?php
      include 'include/config.php';
      $today = date("Y-m-d");
      $sql = "SELECT * FROM events WHERE date >= '$today' ORDER BY date ASC LIMIT 3";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo '<li><h3>' . $row["title"] . '</h3>';
          echo '<p><strong>Date:</strong> ' . date("F j, Y", strtotime($row["date"])) . '<br>';
          echo '<strong>Time:</strong> ' . date("g:i a", strtotime($row["time"])) . '<br>';
          echo '<strong>Venue:</strong> ' . $row["venue"] . '</p></li>';
        }
      } else {
        echo '<li>No upcoming events found.</li>';
      }
      mysqli_close($conn);
    ?>
  </ul>
  <a href="allevents.php">See all events</a>
</section>
