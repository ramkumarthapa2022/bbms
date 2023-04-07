<?php
    include('include/header.php');
    include('include/config.php');
    if (!isset($_SESSION)) {
        
    session_start();

    }
    if(isset($_POST['submit'])){
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
      //  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO staff (fullname, email, password) VALUES ('$fullname', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result){
            $_SESSION['success'] = "Staff account created successfully!";
            header("Location: signin.php");
        }else{
            $_SESSION['error'] = "Error: Unable to create staff account.";
        }
    }
?>

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h1 class="text-center">Staff Signup</h1>
            <hr>
            
            <form method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>
                <button type="submit" name="submit" class="btn btn-primary btn-block">Signup</button>
            </form>
        </div>
    </div>
</div>

<?php include('include/footer.php'); ?>
