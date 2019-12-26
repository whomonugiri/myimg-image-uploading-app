<?php
include './db.php';

if(isset($_GET['id'])){
$selected_id = $_GET['id'];
	
	$query = "DELETE FROM uploads WHERE id=$selected_id";
	
	$delete = mysqli_query($connection,$query);
header('location: ../image_gallery.php?del=true');	
}else{
    header('location:../index.php');
}