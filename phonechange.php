<?php
if(!isset($_SESSION))
{
session_start();
}

include 'include/config.php';
if(isset($_POST['submit'])){
    $new_phone = $_POST['new_phone'];
    $id = $_SESSION['id'];

    // Update phone in the database
    $sql = "UPDATE donor SET contact_no = '$new_phone' WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "phone updated successfully";
    } else {
        echo "Error updating phone: " . mysqli_error($conn);
    }
}
?>

<form method="post">
    <label>New phone</label>
    <input type="phone" name="new_phone">
    <button type="submit" name="submit">Update phone</button>
    <a href="dashboard.php">Go back</a>
</form>
