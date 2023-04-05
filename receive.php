<head>
<link rel="stylesheet" type="text/css" href="receivestyle.css">
</head>
<?php 
  include ('include/header.php');  
?>
  <body>
    <h1>Receptionist Signup</h1>
    <form method="POST" action="receivesignupprocess.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <label for="blood-type">Blood Type:</label>
      <select id="blood-type" name="blood-type" required>
        <option value="">--Select--</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
      </select><br><br>
      <input type="submit" value="Submit">
    </form>
  </body>

<?php
  include ('include/footer.php');
?>