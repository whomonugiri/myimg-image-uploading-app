<?php
session_start();
include './php_includes/db.php';
$isUserLoggedIn = false;
if(isset($_SESSION['login_id'])){
    $isUserLoggedIn = true;
}
if($isUserLoggedIn==false){
    header("location:./index.php");
}
$size_error = false;
$type_error = false;
$script_error = false;
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
}

require './php_includes/header.php';
?>

<!--    ---------------------------->
   
<!--   this is main page upload button area-->
   <div class="gap"></div>
   <div class="up">
   <label class="spcl-btn buttonu" for="image"><i class="fas fa-cloud-upload-alt"></i> UPLOAD ANOTHER IMAGE</label>
        <form action="php_includes/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="image" name="fileToUpload" onchange="this.form.submit()">
        </form><br>
        <?php if(true): ?>
        <span class="success animated fadeInUp">Image Deleted !</span>
        <?php endif;?>
        </div>
    <section class="gallery">
      
       <?php
        $user_id=$_SESSION['login_id'];
        $query = "SELECT * FROM uploads WHERE uploader_id=$user_id ORDER BY id DESC";
        $run = mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($run)){
            ?>
           <div class="fimg">
               <a href="image_app.php?current_image=<?php echo $row['id']; ?>"><img src="uploads/<?php echo $row['image_name']; ?>"></a>
               
           </div>
            <?php
            
        }
        ?>
        
    </section>
<!--    ------------------------------------------->
   
<!--signin form is here   -->

   
<!--      ---------------   -->
    
    
    
</main>
<script src="js/logic.js"></script>
</body>
</html>