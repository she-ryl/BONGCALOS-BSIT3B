<?php 
session_start();

include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];


$login = mysqli_query($con,"select * from users where username='$username' and password='$password'");

$check = mysqli_num_rows($login);

if($check > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['role']=="Admin"){

		$_SESSION['username'] = $username;
		$_SESSION['role'] = "Admin";

		header("location:admin/admin.php");

	// cek jika user login sebagai pegawai
	}else if($data['role']=="User"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "User";
		// alihkan ke halaman dashboard pegawai
		header("location:welcome.php");

	}else{

		
		header("location:login.php?message=fail");
	}	
}else{
	header("location:login.php?message=fail");
}

?>