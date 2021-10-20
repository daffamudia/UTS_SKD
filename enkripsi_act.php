<!DOCTYPE html>
<html>
<head>
    <title>enkripsi</title>
    <style type="text/css">
         body {
            height: 100px;
            background-image: url("sekolah.jpg");
            background-size: cover;
            background-position: 0 -80px;
            padding-top: 30px;
            align-items: center;
            justify-content: center;
            display: grid;
        }
    </style>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<h1 class="website" align="center">SDN BERBEK 1 NGANJUK</h1>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">Kembali</a>
</li>
</ul>
    <?php
        include "lib.php";
        $kunci = str_replace(" ", "", $_POST['kunci']);
        $plain = str_replace(" ", "", $_POST['plain']);
        $panjang_plain = strlen($plain);
        $panjang_kunci = strlen($kunci);
        $index_x = 0;
        $index_y = 0;
        $hasil_ciper = array();
        $hasil_akhir = "";
        while ($index_x < $panjang_plain) 
        {
            $x = substr($plain, $index_x, 1);
            $y = substr($kunci, $index_y, 1);
            $hasil_ciper[$index_x] =
            $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
            $index_x++;
            $index_y++;
        if ($index_y == $panjang_kunci) 
            {
             $index_y = 0;
            }
        }
        $i = 0;
        while ($i < $index_x) 
        {
            $hasil_akhir .= $hasil_ciper[$i];
            $i++;
        }
    ?>
    <div class="container">
    <h4 align="center">Hasil - Enkripsi</h4>
    <hr>
    <form action="dekripsi_act.php" method="post" data-ajax="false"
    class="ui-body ui-body-a ui-corner-all">
    <label for="basic">Cipherteks :</label>
    <textarea class="form-control" name="ciper"
    id="textarea-a"><?php echo $hasil_akhir; ?></textarea>
    <label for="basic">Masukkan Kunci :</label>
    <textarea class="form-control" name="kunci"
    id="textarea-a"><?php echo $kunci; ?></textarea><br>
    <input type="submit" class="btn btn-success" value="
    Decrypt" data-theme="a">
 </form>
 </div>
</body>
</html>
