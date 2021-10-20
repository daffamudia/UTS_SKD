<?php 
require 'Connect.php';
require 'Cipher.php';
 
$username = $_POST['username'];
$password = sha1($_POST['password']);

$login = mysqli_query($mysqli,"SELECT * from user where username='$username' and password='$password'");
$name = mysqli_fetch_assoc($login);
$cek = mysqli_num_rows($login);
 
if($cek > 0){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
} 

 
?>