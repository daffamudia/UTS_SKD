<?php

require 'Connect.php';
require 'Cipher.php';
if($_POST['daftar']){
	$id	    = $_POST['id'];
	$nama	    = $_POST['nama'];
	$username	= $_POST['username'];
	$password	= $_POST['password'];
    $ciphertext = Encipher($password, 4);
    $passwordd  =sha1($plain);
    $alamat	    = $_POST['alamat'];
	$insert = mysqli_query($mysqli,"INSERT INTO user VALUES('$id', '$nama', '$username', '$passwordd', '$alamat')"); 
}

?>