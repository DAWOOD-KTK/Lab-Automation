<?php
include "admin_panel/backend/db.php";

if (isset($_GET['logout'])) {
 
  session_start();
  session_unset();
  session_destroy();

  echo "<script> 
   alert('logout successfuly....')
   window.location.href=' login.php'
  </script>";
 
    
 
}

?>