<?php
session_start();
// remove all session variables
if(isset($_SESSION['login_id'])){
  session_unset();

// destroy the session
session_destroy();  
    header('location:../index.php?logout=true');
}else{
    header('location:../index.php');
}

?>