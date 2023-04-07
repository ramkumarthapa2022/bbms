<?php
session_start();
    //include header file
    include ('include/header.php');

    //check if user is logged in
    if(!isset($_SESSION['role_id'])){
        header("Location: signin.php");
        exit;
    }

    //get user role from session
    $role_id = $_SESSION['role_id'];
?>
      
  <?php
    include 'include/config.php';


    
  if(isset($_SESSION['role_id']))
  {
       if ($_SESSION['role_id'] == 2) 
       {
           include 'staffaction.php';
       }
     elseif($_SESSION['role_id'] == 1)
       {
         include ('donoraction.php');
       }
    elseif ($_SESSION['role_id'] == 3) 
       {
         include ('receiveaction.php');
       }
   else
       {
         echo "unknown role id";
       }
  }
  else
  {
     echo "role id not found";
  }
  //about us
  if(isset($_SESSION['role_id']))
  {
       if ($_SESSION['role_id'] == 2) 
       {
           include 'license.php';
       }
     elseif($_SESSION['role_id'] == 1)
       {
         include ('aboutus.php');
       }
    elseif ($_SESSION['role_id'] == 3) 
       {
         include ('aboutus.php');
       }
   else
       {
         echo "unknown role id";
       }
  }
  else
  {
     echo "role id not found";
  }
//about us
  $role_id = 0; // set default value
  if(!isset($_SESSION))
  {
  session_start();
  }
  if(isset($_SESSION['role_id']))
     {
          if ($_SESSION['role_id'] == 2) 
          {
              include '';
          }
        elseif($_SESSION['role_id'] == 1)
          {
            include ('include/footer.php');
          }
       elseif ($_SESSION['role_id'] == 3) 
          {
            include ('include/footer.php');
          }
      else
          {
            echo "unknown role id";
          }
     }
     else
     {
        echo "role id not found";
     }
?>