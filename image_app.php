<?php
session_start();
if($_GET['current_image']==''){
    header('location:index.php');
}
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
if(isset($_GET['current_image'])){
    $selected_image_id = $_GET['current_image'];
     $query = "SELECT * FROM uploads WHERE id=$selected_image_id";
     $result = mysqli_query($connection,$query);
    if($image_detail){
       header('location:image_gallery.php'); 
    }
    $image_detail = mysqli_fetch_array($result);
    if(!$image_detail){
       header('location:image_gallery.php'); 
    }
    $sitename = "https://myimg.com";
}else{
     header('location:index.php');
}
?>


<!--    ---------------------------->
   
<!--   this is main page upload button area-->
    <section class="upload-call-area">
       <div class="center-align">
          <div class="image-app">
             
              <div class="img"><img src="uploads/<?php echo $image_detail['image_name']; ?>" alt="" class="up-img"></div>
              <div class="img-code"><textarea spellcheck="false">
DIRECT LINK
<?php echo "$sitename/uploads/{$image_detail['image_name']}"; ?>
  

EMBED CODE
<img src="<?php echo "$sitename/uploads/{$image_detail['image_name']}"; ?>">
  

HTML THUMBNAIL
<img src="<?php echo "$sitename/uploads/{$image_detail['image_name']}"; ?>" style="width:300px; padding:7px; border-radius:5px; border:1px solid #D5D8DC;">


PAGE LINK
<?php echo "$sitename/show_img.php?current_image={$image_detail['id']}"; ?>
 
                
//Image is Uploaded By <?php echo $image_detail['uploader_name']; ?>
              </textarea></div>
          </div>
          <br>
           <label class="spcl-btn buttonu" for="image"><i class="fas fa-cloud-upload-alt"></i> UPLOAD ANOTHER IMAGE</label> 
           <?php if($_SESSION['login_id']==$image_detail['uploader_id']): ?>
           <a href="php_includes/del.php?id=<?php echo $image_detail['id']; ?>"><button class="redb spcl-btnd buttonu" ><i class="fas fa-trash-alt"></i> DELETE</button></a>
           <?php endif; ?>
        
        <form action="php_includes/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="image" name="fileToUpload" onchange="this.form.submit()">
        </form>
       </div>
        
    </section>
<!--    ------------------------------------------->
   
<!--signin form is here   -->

   
<!--      ---------------   -->
    
    
    
</main>
<script src="js/logic.js"></script>
</body>
</html>