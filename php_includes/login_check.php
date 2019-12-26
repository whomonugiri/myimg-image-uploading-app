<?php
include 'db.php';
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $query ="SELECT * FROM users WHERE username='$username' AND password='$password'";
    
    $result = mysqli_query($connection,$query);
    
    $check = mysqli_fetch_array($result);
    
    if(isset($check)){
        session_start();
        $_SESSION["login_id"] = $check[0];
        $_SESSION["login_fname"] = $check[1];
        $_SESSION["login_lname"] = $check[2];
        $_SESSION["login_password"] = $check[4];
       
       
        header('location:../image_gallery.php');
        
    }else{
        header('location:../index.php?wrong_error=true');
    }
    
}
?>