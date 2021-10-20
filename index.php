<!DOCTYPE html>
<html>
<head>
	<title>SDN BERBEK 1 NGANJUK</title>
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
    .login{
        position: absolute;
        width: 400px;
        height: 400px;
        left: 500px;
        top: 100px;
        bottom: 80px;
        border: 3px solid #000;
        border-radius: 0px;
        background: #ffc107;
    }
    .username{
        position: absolute;
        left: 45px;
        top: 100px;
        font-weight: bold;
    }
    .password{
        position: absolute;
        left: 45px;
        top: 170px;
        font-weight: bold;
    }
    .submit{
        position: absolute;
        left: 165px;
        top: 250px;
    }
    .signup{
        position: absolute;
        left: 170px;
        top: 330px;
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
    p{
        position: absolute;
        left: 130px;
        top: 305px;
    }
</style>
<body>
<h1 align="center">Selamat Datang di SDN BERBEK 1 NGANJUK</h1>
	<br/>
	<div class="login">
    <h2 align="center">LOGIN</h2>
	<br/>
		<form action="dashboard.php" method="post" onSubmit="return validasi()">
			<div class="username">
				<label>Username : </label>
				<input type="text" name="username" id="username" placeholder="Masukkan Username" />
			</div>
			<div class="password">
				<label>Password : </label>
				<input type="password" name="password" id="password" placeholder="Masukkan Password" />
			</div>			
			<div class="submit">
				<input type="submit" value="Login" class="btn btn-outline-success">
			</div>
            <p>Belum Punya Akun?</p>
            <div class="signup">
            <a href="daftar.php">Sign Up</a>
            </div>
		</form>
	</div>
</body>
 
<script>
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Silahkan isi username dan password terlebih dahulu !');
			return false;
		}
	}
</script>
</html>