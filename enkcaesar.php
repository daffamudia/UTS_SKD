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
    <a class="nav-link" href="dashboard.php">Klik Disini Untuk Kembali Ke Menu Utama</a>
    <li class="nav-item">
    <a class="nav-link" href="dekripsi.php">Klik Disini Untuk Mencoba Dekripsi</a>
</li>
</ul>
</body> 
 
</html> 
<br></br>
<?php 
$kalimat = $_GET["kata"]; $key = $_GET["key"]; for ($i = 0; $i < strlen($kalimat); $i++) { 
    $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal 
    $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi 
    $c[$i] = chr($b[$i]); //rubah desimal ke ASCII 
} 
echo "Kalimat Asli : "; for ($i = 0; $i < strlen($kalimat); $i++) {     
    echo $kalimat[$i]; 
} 
echo "<br>"; echo "Hasil Enkripsi ="; 
$hsl = ''; for ($i = 0; $i < strlen($kalimat); $i++) {     
    echo $c[$i]; 
    $hsl = $hsl . $c[$i]; 
} 
echo "<br>"; 
//simpan data di file 
$fp = fopen("enkripsi.txt", "w"); fputs($fp, $hsl); fclose($fp); 
?>