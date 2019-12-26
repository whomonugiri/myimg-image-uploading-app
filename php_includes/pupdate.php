<?php
include './db.php';
include './error_check.php';
if(isset($_POST['register'])){
	$selected_id = $_GET['id'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$password = $_POST['password'];
	
	if(conNumbers($fname.$lname) || conSpecial($fname.$lname)){
		header('location:../index.php?error_code=101');
	}else{
		$query = "UPDATE users SET first_name='$fname',last_name='$lname',password='$password' WHERE id=$selected_id";

$insert_data = mysqli_query($connection,$query);

if(!$insert_data){
	
die("something wrong with query");	
}else{
	
header('location:../index.php?update=true');	
}
	}
	
	
}




