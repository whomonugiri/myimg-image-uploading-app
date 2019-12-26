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
           <div class="about-grid">
               <div><h1>What is this ?</h1></div>
               <div>
                 <p>
                     this is website where you can upload images and get the link of the uploaded images and also you can delete your uploaded images. for uploading images or getting link of the images you have to create a account without creating a account you can not able upload images. <br>
                     <span class="error">this is a personal project developed by "Monu Giri"</span>
                 </p>
               </div>
           </div>
           
        </div>
       
        
        
    </section>
<!--    ------------------------------------------->
   
<!--signin form is here   -->
<?php include './php_includes/login_form.php'; ?>
   
<!--      ---------------   -->
    
    <div class="credit">
<div class="name-section"><span class="name">Developed by Monu Giri</span></div>
<div class="social-icons">
<a href="https://github.com/whomonugiri" target="_blank"><i title="@whomonugiri" class="fab fa-github git"></i></a>
<a href="https://instagram.com/oyeitsmg" target="_blank"><i title="@oyeitsmg" class="fab fa-instagram insta"></i></a>
<a href="https://www.linkedin.com/in/whomonugiri/" target="_blank"><i title="@whomonugiri" class="fab fa-linkedin-in in"></i></a>
</div>
</div>
    
</main>
<script src="js/logic.js"></script>
</body>
</html>