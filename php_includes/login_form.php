<section class="signin-cover animated fast hide" id="signin-form">
    <div class="signin-box">
      <div class="close-btn-area"><i class="fas fa-window-close close-btn" id="form-close"></i></div>
      <div class="login-title">
          <img src="imgs/logo.png" alt="logo" class="logo-img">
         
      </div>
<!--       <button class="login-btn"><i class="fas fa-window-close"></i></button>-->
        <form method="post" action="php_includes/login_check.php" autocomplete="off">
           <div class="input-align">
            <input type="text" name="username" class="username input" placeholder="Username" required>
            <input type="password" name="password" class="password input" placeholder="Passsword" required> 
           </div>
            
         <input type="submit" name="login" class="login-btn" value="Signin">
        </form>
    </div>
</section>