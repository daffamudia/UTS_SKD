<?php

require 'Connect.php';
require 'Cipher.php';
if($_POST['pendaftarann']){
	$id_user = $_POST['id_user'];
	$nama	= $_POST['nama'];
	$email	= $_POST['email'];
    $ciphertext = Encipher($email, 3);
    $emaill  =sha1($plain);
    $alamat	= $_POST['alamat'];
	$insert = mysqli_query($mysqli,"INSERT INTO daftar VALUES( '$id_user', '$nama', '$emaill', '$alamat')"); 
}

?>