<?php
session_start();
$isUserLoggedIn = false;
if(isset($_SESSION['login_id'])){
    $isUserLoggedIn = true;
    
}
$char_error = false;
$blank_error = false;
if(isset($_GET['char_error'])){
   $char_error = true; 
}elseif(isset($_GET['blank_error'])){
    $blank_error = true;
}
if(!$isUserLoggedIn){
    header("location:index.php");
}
require './php_includes/header.php';
?>

<!--    ---------------------------->
   
<!--   this is main page upload button area-->
    <section class="signup-cover">
    

    <div class="signin-box">
    <h1>Update your profile</h1>
    <p>username cannot be changed</p>
     <?php if($char_error): ?>
        <span class="error">special characters are not allowed in name/username</span>
        <?php endif;?>
        <?php if($blank_error): ?>
        <span class="error">fill all the fields</span>
        <?php endif;?>
<!--       <button class="login-btn"><i class="fas fa-window-close"></i></button>-->
        <form method="post" action="php_includes/pupdate.php?id=<?php echo $_SESSION['login_id']; ?>" autocomplete="off">
           <div class="input-align-r">
            <input type="text" name="firstname" class="firstname inputr" value="<?php echo $isUserLoggedIn==true?$_SESSION['login_fname']:''; ?>" placeholder="First name">
            <input type="text" name="lastname" class="lastname inputr" value="<?php echo $isUserLoggedIn==true?$_SESSION['login_lname']:''; ?>" placeholder="Last name">
            <input type="text" name="password" class="passwordr inputr" value="<?php echo $isUserLoggedIn==true?$_SESSION['login_password']:''; ?>" placeholder="Passsword"> 
           </div>
            
         <input type="submit" name="register" class="login-btn" value="Update">
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