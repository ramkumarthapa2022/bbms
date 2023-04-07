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
    session_start();
    include 'config.php';
    if (!isset($_SESSION['role_id'])) {
    include 'navigation.php';
    }    
   
   // Check if the user is logged in
   if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Now you can use $email and $password in your SQL query
    $query = "SELECT role_id FROM (
        SELECT role_id FROM staff
        UNION ALL
        SELECT role_id FROM donor
        UNION ALL
        SELECT role_id FROM receptionists
    ) AS users WHERE email=? AND password=?";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($query);
    
    // Bind the parameters
    $stmt->bind_param("ss", $email, $password);
    
    // Execute the query
    $stmt->execute();
    
    // Get the result
    $result = $stmt->get_result();
    
    // Check if there is one row returned
    if ($result->num_rows == 1) {
        // User exists, so get their role_id and show/hide navigation items based on role_id
        $row = $result->fetch_assoc();
        $role_id = $row['role_id'];
        
        // Show/hide navigation items based on role_id
        if ($role_id == 1) {
            include 'donornav.php';
            // Admin user, so show all navigation items
            // code to show all navigation items here
        } elseif ($role_id == 2) {
            include 'staffnav.php';
            // Regular user, so show some navigation items
            // code to show some navigation items here
        } elseif ($role_id == 3) {
            include 'receptionistsnav.php';
            // Another type of user, so show some different navigation items
            // code to show some different navigation items here
        }
    }
}
?>
