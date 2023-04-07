<!DOCTYPE html>
	<head>
		<title>Donate The Blood</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">
        <link rel="stylesheet" href="css/styles.css">
		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/custom.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	</head>
  <?php
  include 'config.php';
    ?>

<?php
$role_id = 0; // set default value
if(!isset($_SESSION))
{
session_start();
}
if(isset($_SESSION['role_id']))
   {
        if ($_SESSION['role_id'] == 1) {
            include 'donornav.php';
        } elseif ($_SESSION['role_id'] == 2) {
            include 'staffnav.php';
        } elseif ($_SESSION['role_id'] == 3) {
            include 'receptionistsnav.php';
        }
        else
        {   
            echo "Role Id not set.";
        }
    }
    else{
        include 'navigation.php';
    }
?>
