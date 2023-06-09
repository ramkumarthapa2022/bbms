
<?php
session_start();
include 'include/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    // validate user input
    if (empty($email) || empty($password)) {
        echo "Email and password are required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
    } 
    else {
        // authenticate user
        $stmt = $conn->prepare("SELECT email, password, id, role_id FROM (
            SELECT email, password, id, role_id FROM staff
            UNION ALL
            SELECT email, password, id, role_id FROM donor
            UNION ALL
            SELECT email, password, id, role_id FROM receptionists
        ) AS users WHERE email=? AND password=?
        ");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if($result->num_rows>0)
        {
            // set session variable and redirect to dashboard
            session_start();
            $_SESSION['loggedin'] = true;
            // get the id and role_id of the user
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $role_id = $row['role_id'];
            
            // set the session variables
            $_SESSION['id'] = $id;
            $_SESSION['email']=$email;
            $_SESSION['password']=$password;
            $_SESSION['role_id'] = $role_id;
            header("Location: dashboard.php");
            exit();
        }
        else
        {
            echo "Incorrect email or password.";
        }
    }
}
?>