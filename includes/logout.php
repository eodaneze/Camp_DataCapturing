<?php
  session_start();
 if(isset($_SESSION['adminId'])){
    session_unset();
    session_destroy();
    // $_SESSION['success'] = "You have logged out successfully";
    header('location: ../index.php');
 }


?>