<?php
include 'include/config.php';
if(!isset($_SESSION))
{
session_start();
}

// Assuming you have already established a database connection

if(isset($_POST['delete'])) {
  $id = $_POST['id'];

  // SQL query to delete a record from the donor table
  $sql = "DELETE FROM receptionists WHERE id = $id";

  if(mysqli_query($conn, $sql)) {
    // Record deleted successfully
    echo "Record deleted successfully";
    echo "<br><br><button onclick='goBack()'>Go Back</button>";
    echo "<script>function goBack() {window.history.back();}</script>";
  } else {
    // Error deleting record
    echo "Error deleting record: " . mysqli_error($conn);
  }

  // Close the database connection
  mysqli_close($conn);
}
?>
