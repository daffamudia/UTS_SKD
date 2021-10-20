<html> 
 
<head> 
    <title>FORM ENKRIPSI</title> 
</head> 
<style>
    body{
        height: 100px;
            background-image: url("sekolah.jpg");
            background-size: cover;
            background-position: 0 -80px;
            padding-top: 30px;
    }
    
</style>
 
<body> 
<h1 class="website" align="center">SDN BERBEK 1 NGANJUK</h1>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">Kembali</a>
</li>
</ul>
</body> 
 
</html> 
<br></br>

<?php 
 $key = $_GET["key"]; 
 $nmfile = "enkripsi.txt"; 
 $fp = fopen($nmfile,"r"); // buka file hasil enkripsi 
 $isi = fread($fp,filesize($nmfile)); 
 
 for($i=0;$i<strlen($isi);$i++) 
 { 
 $kode[$i]=ord($isi[$i]); // rubah ASII ke desimal 
 $b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar 
 $c[$i]=chr($b[$i]); //rubah desimal ke ASCII 
 }  echo "kalimat ciphertext : ";  for($i=0;$i<strlen($isi);$i++) 
 { 
 echo $isi[$i]; 
 }  echo "<br>";  echo "hasil dekripsi =";  for ($i=0;$i<strlen($isi);$i++) 
 {  echo $c[$i]; 
 }  echo "<br>"; 

 ?>
