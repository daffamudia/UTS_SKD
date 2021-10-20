<!DOCTYPE html>
<html>
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
  <li class="nav-item">
    <a class="nav-link" href="index.php">Logout</a>
  </li>
</ul>

  <div class="content">
  <div class="card-body">

                    <p align="center" class="card-text">Silahkan isi data diri siswa</p>

                <form method="POST" action="pendaftarann.php">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="tanggal-lahir" placeholder="Tanggal Lahir Anda" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Umur</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="umur" placeholder="Isikan Umur Anda" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="jenis-kelamin" required>
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="alamat" placeholder="Isikan Alamat Anda" required>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="reset" class="btn btn-outline-primary">RESET</button>
                        <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
		</form>
	</div>
</body>
</html>