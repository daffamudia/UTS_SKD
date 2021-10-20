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
    <body>
    <h1 class="website" align="center">SDN BERBEK 1 NGANJUK</h1>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" href="dashboard.php">Kembali</a>
</li>
</ul>
    </body>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
    <div class="container">
    <h4 align="center">Vigenere - Enkripsi</h4>
    <hr>
        <form action="enkripsi_act.php" method="post" data-ajax="false"class="ui-body ui-body-a ui-corner-all">
            <label for="basic">Masukkan Plain Text :</label>
            <textarea class="form-control" name="plain"id="textarea-a"></textarea>
            <label for="basic">Masukkan Kunci :</label>
            <textarea class="form-control" name="kunci"id="textarea-a"></textarea><br>
            <input type="submit" class="btn btn-success" value=" Encrypt"data-theme="a">
            <input type="reset" class="btn btn-primary" value=" Hapus"data-theme="a">
        </form>
    </hr>
</div>
</html>