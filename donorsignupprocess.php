<?php

 include 'include/config.php';
?>
<?php
if(
  isset($_POST["name"])//&&isset($_POST["blood_group"])&&isset($_POST["gender"])&&isset($_POST["day"])&&isset($_POST["month"])&&isset($_POST["year"])&&isset($_POST["email"])&&isset($_POST["contact"])&&isset($_POST["city"])&& isset($_POST["password"])
  ){
    // Process form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $blood_group = $_POST["blood_group"];
    $gender = $_POST["gender"];
    $date = $_POST["date"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $email = $_POST["email"];
    $contact_no = $_POST["contact_no"];
    $city = $_POST["city"];
    $password = $_POST["password"];
    $c_password = $_POST["c_password"];
    //$hashed_password = password_hash($password, PASSWORD_DEFAULT);

    
    // Insert data into table
    $sql = "INSERT INTO donor (name, blood_group, gender, birth_date, email, contact_no, city, password) 
    VALUES ('$name', '$blood_group', '$gender', '$year-$month-$date', '$email', '$contact_no', '$city', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        $usernamesmtp="manga manga";
        $passwordsmtp="manhua";
        ini_set('SMTP','smtp.mailtrap.io');
        ini_set('smtp_port',2525);
        ini_set('smtp_user',$usernamesmtp);
        ini_set('smtp_pass',$passwordsmtp);

            // Send thank you message to donor
            $to = $email;
            $subject = "Thank you for signing up!";
            $message = "Dear $name,\n\nThank you for signing up to donate blood. Your donation can save lives!\n\nBest regards,\nThe Blood Donation Team";
            $headers = "From: mangamangamanhua@gmail.com";
            mail($to, $subject, $message, $headers);
        } 
    else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

// Close database connection
mysqli_close($conn);

}
?>
<a href="signin.php"> Goto</a>
    