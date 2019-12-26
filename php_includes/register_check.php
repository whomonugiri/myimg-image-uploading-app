<?php
include './db.php';
include './error_check.php';
if(isset($_POST['register'])){
 $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
	if(conNumbers($first_name.$last_name) || conSpecial($first_name.$last_name.$username)){
		header('location:../create_new_account.php?char_error=true');
	}elseif($first_name=="" || $last_name=="" || $username == "" || $password == ""){
		header('location:../create_new_account.php?blank_error=true');
	
	}else{
		$query = "INSERT INTO users (first_name,last_name,username,password) VALUES('$first_name','$last_name','$username','$password')";

$insert_data = mysqli_query($connection,$query);

if(!$insert_data){
	
die("something wrong with query");	
}else{
	
header('location:../index.php?success=true');	
}
	}
	
	
}

?>