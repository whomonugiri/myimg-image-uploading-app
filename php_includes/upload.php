<?php
session_start();
include 'db.php';
$target_dir = "../uploads/";
$temp = explode(".", $_FILES["fileToUpload"]["name"]);
$newfilename = round(microtime(true)) . '.' . end($temp);

$target_file = $target_dir . $newfilename;

//$temp = explode(".", $_FILES["file"]["name"]);
//$newfilename = round(microtime(true)) . '.' . end($temp);
//move_uploaded_file($_FILES["file"]["tmp_name"], "../img/imageDirectory/" . $newfilename);


$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 2000000) {
    
    $uploadOk = 0;
    header('location:../index.php?size_error=1');
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
   
    $uploadOk = 0;
    header('location:../index.php?type_error=1');
}
// Check if $uploadOk is set to 0 by an error
if($uploadOk) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $image_name = $newfilename;
        $uploader_id = $_SESSION['login_id'];
        $uploader_name = $_SESSION['login_fname'].' '.$_SESSION['login_lname'];
        $query = "INSERT INTO uploads (image_name,uploader_id,uploader_name) VALUES('$image_name','$uploader_id','$uploader_name')";

$insert_data = mysqli_query($connection,$query);
      echo $current_image_id = mysqli_insert_id($connection);
        header("location:../image_app.php?current_image=$current_image_id");
        
    } else {
        header('location:../index.php?script_error=1');
    }
}