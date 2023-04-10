<head>
  <link rel="stylesheet" href="eventsectionstyle.css">
</head>



<?php
include 'include/header.php';
?>

<section>
  <h2>All Events</h2>
  <ul>
    <?php
      include 'include/config.php';
      $sql = "SELECT * FROM events ORDER BY date ASC";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
          echo '<li><h3>' . $row["title"] . '</h3>';
          echo '<p><strong>Date:</strong> ' . date("F j, Y", strtotime($row["date"])) . '<br>';
          echo '<strong>Time:</strong> ' . date("g:i a", strtotime($row["time"])) . '<br>';
          echo '<strong>Venue:</strong> ' . $row["venue"] . '</p></li>';
        }
      } else {
        echo '<li>No events found.</li>';
      }
      mysqli_close($conn);
    ?>
  </ul>
  <a href="index.php">Go back to home page</a>
</section>

<?php
include 'include/footer.php';
?>
