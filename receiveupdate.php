<?php 

if(!isset($_SESSION))
{
session_start();
}


?>




<div class="button-row">
  <a href="remailchange.php"><button class="btn btn-primary">Change Email</button>
  <a href="rpasswordchange.php"><button class="btn btn-success">Change Password</button>
  
</div>
<style>
    .button-row {
  display: flex;
  justify-content: center; /* horizontally center the buttons */
  align-items: center; /* vertically center the buttons */
}

.button-row button {
  margin: 0 10px; /* add some space between the buttons */
}

</style>