<?php
if(!isset($_SESSION))
{
session_start();
}


include 'include/config.php';
if(isset($_POST['submit'])){
    $new_email = $_POST['new_email'];
    $id = $_SESSION['id'];

    // Update email in the database
    $sql = "UPDATE staff SET email = '$new_email' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Email updated successfully";
    } else {
        echo "Error updating email: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    <label>New Email</label>
    <input type="email" name="new_email">
    <button type="submit" name="submit">Update Email</button>
    <a href="dashboard.php">Go back</a>
</form>
