<?php
include "admin_panel/backend/db.php";


 
  session_start();
  session_unset();
  session_destroy();

  echo "<script> 
   alert('logout successfuly....')
   window.location.href=' login.php'
  </script>";
 
    
 


?>