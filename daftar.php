<html>
    <?php
        require 'signup.php';
    ?>
<head>
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
            align-items: center;
            justify-content: center;
            display: grid;
            padding-top: 30px;
    }
    .daftar{
        position: absolute;
        width: 500px;
        height: 440px;
        left: 450px;
        top: 40px;
        bottom: 80px;
        border: 3px solid #000;
        border-radius: 0px;
        background: #ffc107;
    }
    .nama{
        position: absolute;
        left: 75px;
        top: 100px;
        font-weight: bold;
    }
    .username{
        position: absolute;
        left: 45px;
        top: 150px;
        font-weight: bold;
    }
    .password{
        position: absolute;
        left: 50px;
        top: 200px;
        font-weight: bold;
    }
    .alamat{
        position: absolute;
        left: 65px;
        top: 250px;
        font-weight: bold;
    }
    input[type=text] {
        width: 241px;
        border: hidden;
        border-radius: 5px;
        background: #FFF0F5;
    }
    input[type=password] {
        width: 241px;
        border: hidden;
        border-radius: 5px;
        background: #FFF0F5;
    }
    .submit{
        position: absolute;
        left: 200px;
        top: 300px;
    }
    p{
        position: absolute;
        left: 180px;
        top: 350px;
    }
    .login{
        position: absolute;
        left: 220px;
        top: 380px;
    }
</style>
<body>
    <div class="daftar"> 
        <form action="" method="post"
            <fieldset>
            <h1 align="center">Daftar</h1>
            <div class="nama">
                <label>Nama : </label>
                <input type="text" name="nama"><br><br>
            </div>
            <div class="username">
                <label>Username : </label>
                <input type="text" name="username"><br><br>
            </div>
            <div class="password">
                <label>Password : </label>
                <input type="password" name="password"><br><br>
            </div>
            <div class="alamat">
                <label>Alamat : </label>
                <input type="text" name="alamat"><br><br>
            </div>
            <div class="submit">
                <input type="submit" value="Sign Up" name="daftar" class="btn btn-outline-primary"><br><br>
            </div>
            <p>Sudah Punya Akun?</p>
            <div class="login">
            <a href="index.php">Login</a>
            </div>
            </fieldset>
        </form>
    </div>
</body>
</html>