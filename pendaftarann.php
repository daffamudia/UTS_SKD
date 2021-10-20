<html>
    <?php
        require 'connectdaftar.php';
    ?>
<head>
    <title>SDN BERBEK 1 NGANJUK</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <a class="nav-link" href="dashboard.php">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Pendaftaran</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="persyaratan.php">Persyaratan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="ekstra.php">Ekstrakulikuler</a>
  </li>
</ul>
<div class="pendaftarann"> 
        <form action="" method="post"
            <fieldset>
            <h4 align="center">Lengkapi form pendaftaran berikut</h4>
            <div class="nama">
                <label>Nama : </label>
                <input type="text" name="nama"><br><br>
            </div>
            <div class="email">
                <label>Email : </label>
                <input type="email" name="email"><br><br>
            </div>
            <div class="alamat">
                <label>Alamat : </label>
                <input type="text" name="alamat"><br><br>
            </div>
            <div class="submit">
                <input type="submit" value="Submit" name="pendaftarann" class="btn btn-outline-primary"><br><br>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>