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
    <form action="enkcaesar.php" method="get"> 
        <table > 
            <tr> 
                <td>Plainteks</td> 
                <td>:<input type="text" name="kata"></td> 
            </tr> 
            <tr> 
                <td>Key</td> 
                <td>:<input 	type="text" 	name="key" maxlength="2"></td>             </tr> 
        </table> 
        <br> 
        <br> 
        <input type="submit" value="kirim"> 
        <input type="reset" value="reset" > 
    </form> 
    <a href="dekripsi.php">Klik Disini Untuk Mencoba Dekripsi</a>
</body> 
 
</html> 
