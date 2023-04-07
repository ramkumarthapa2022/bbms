<?php
if(!isset($_SESSION))
{
session_start();
}

include 'include/config.php';
if(isset($_POST['submit'])){
    $new_city = $_POST['new_city'];
    $id = $_SESSION['id'];

    // Update email in the database
    $sql = "UPDATE donor SET city = '$new_city' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "City updated successfully";
    } else {
        echo "Error updating city: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    <label>New City</label>
    <input type="city" name="new_city">
    <button type="submit" name="submit">Update City</button>
    <a href="dashboard.php">Go back</a>
</form>
