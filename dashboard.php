<?php
//session_start();
//echo "Session started.<br>";

// ... rest of the code ...

    //include header file
    include ('include/header.php');

    //check if user is logged in
    if(!isset($_SESSION['id'])){
        header("Location: signin.php");
        exit;
    }

    //get user role from session
    $role_id = $_SESSION['role_id'];

    //query the database to retrieve data for the dashboard
    //the exact query will depend on your database schema and the data you want to display

    //generate HTML content for the dashboard based on the retrieved data

    //include footer file
    include ('include/footer.php');
?>