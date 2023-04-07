<?php 

if(!isset($_SESSION))
{
session_start();
}


?>




<div class="button-row">
  <a href="emailchange.php"><button class="btn btn-primary">Change Email</button>
  <a href="phonechange.php"><button class="btn btn-secondary">Change Phone</button>
  <a href="citychange.php"><button class="btn btn-success">Change City</button>
  <a href="passwordchange.php"><button class="btn btn-success">Change Password</button>
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