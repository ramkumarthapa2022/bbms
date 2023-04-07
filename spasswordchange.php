<?php
if(!isset($_SESSION))
{
session_start();
}

include 'include/config.php';
if(isset($_POST['submit'])){
    $new_password = $_POST['new_password'];
    $id = $_SESSION['id'];

    // Update password in the database
    $sql = "UPDATE staff SET password = '$new_password' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "password updated successfully";
    } else {
        echo "Error updating password: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    <label>New password</label>
    <input type="password" name="new_password">
    <button type="submit" name="submit">Update password</button>
    <a href="dashboard.php">Go back</a>
</form>
