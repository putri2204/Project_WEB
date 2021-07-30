<?php
	session_start();
include 'config.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($conn,"select * from registrasi where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){

	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:main/index.php");
}else{
	 echo "<SCRIPT>
        alert('Username atau Password Salah')
        window.location.replace('index.php');
    </SCRIPT>";
}
 
?>