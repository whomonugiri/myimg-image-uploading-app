<?php
session_start();
$isUserLoggedIn = false;
if(isset($_SESSION['login_id'])){
    $isUserLoggedIn = true;
}
$size_error = false;
$type_error = false;
$script_error = false;
$wrong_error = false;
$logouted = false;
$success = false;
$login_success = false;
if(isset($_GET['type_error'])){
   $type_error = true; 
}elseif(isset($_GET['size_error'])){
    $size_error = true;
}elseif(isset($_GET['script_error'])){
    $script_error=true;
}elseif(isset($_GET['success'])){
    $success = true;
}elseif(isset($_GET['login_success'])){
    $login_success = true;
}elseif(isset($_GET['wrong_error'])){
    $wrong_error = true;
}elseif(isset($_GET['logout'])){
    $logouted = true;
}

require './php_includes/header.php';
?>
<!--
<script>
    var file = document.getElementById("image");
    file.value = file.defaultValue;
</script>
-->

<!--    ---------------------------->
   
<!--   this is main page upload button area-->
    <section class="upload-call-area">
       <div class="center-align">
            <?php if($success): ?>
        <span class="success animated fadeInUp">Account Created ! , Click on Signin</span>
        <?php endif;?>
          <?php if($login_success): ?>
        <span class="success animated fadeInUp">You logged in successfully !</span>
        <?php endif;?>
          <?php if($logouted): ?>
        <span class="success animated fadeInUp">You logged out !</span>
        <?php endif;?>
          
          <?php if($wrong_error): ?>
        <span class="error animated fadeInUp">You entered wrong username/password</span>
        <?php endif;?>
           <h1>Upload and share your images.</h1>
           
        <p>Select and start uploading your images now. 2 MB limit. Direct image links, Embed Code and HTML thumbnails.</p>
       
        
        <?php if($isUserLoggedIn): ?>
        <label class="spcl-btn buttonu" for="image"><i class="fas fa-cloud-upload-alt"></i> UPLOAD IMAGE</label>
        <form action="php_includes/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="image" name="fileToUpload" onchange="this.form.submit()">
        </form>
        <?php endif; ?>
        <?php if(!$isUserLoggedIn): ?>
        <button class="spcl-btn buttonu" onclick="showHide()" id="nolog"><i class="fas fa-cloud-upload-alt"></i> UPLOAD IMAGE</button>
        <?php endif; ?>
        
         <?php if($size_error): ?>
        <span class="error">Sorry, your file is larger then 2mb</span>
        <?php endif;?>
         <?php if($type_error): ?>
        <span class="error">Sorry, only JPG, JPEG, PNG & GIF files are allowed.</span>
        <?php endif;?>
        <?php if($script_error): ?>
        <span class="error">Something is wrong with website , please try again after sometime</span>
        <?php endif; ?>
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