<?php
session_start();
$isUserLoggedIn = false;
if(isset($_SESSION['login_id'])){
    $isUserLoggedIn = true;
    header('location:index.php');
}
$char_error = false;
$blank_error = false;
if(isset($_GET['char_error'])){
   $char_error = true; 
}elseif(isset($_GET['blank_error'])){
    $blank_error = true;
}

require './php_includes/header.php';
?>

<!--    ---------------------------->
   
<!--   this is main page upload button area-->
    <section class="signup-cover">
    

    <div class="signin-box">
    <h1>Create an account</h1>
    <p>It's quick and easy.</p>
     <?php if($char_error): ?>
        <span class="error">special characters are not allowed in name/username</span>
        <?php endif;?>
        <?php if($blank_error): ?>
        <span class="error">fill all the fields</span>
        <?php endif;?>
<!--       <button class="login-btn"><i class="fas fa-window-close"></i></button>-->
        <form method="post" action="php_includes/register_check.php" autocomplete="off">
           <div class="input-align-r">
            <input type="text" name="firstname" class="firstname inputr" placeholder="First name">
            <input type="text" name="lastname" class="lastname inputr" placeholder="Last name">
            <input type="text" name="username" class="usernamer inputr" placeholder="Username">
            <input type="password" name="password" class="passwordr inputr" placeholder="Passsword"> 
           </div>
            
         <input type="submit" name="register" class="login-btn" value="Create Account">
        </form>
    </div>
</section>
<!--    ------------------------------------------->
   
<!--signin form is here   -->
<?php include './php_includes/login_form.php'; ?>
   
<!--      ---------------   -->
    
    
    
</main>
<script src="js/logic.js"></script>
</body>
</html>