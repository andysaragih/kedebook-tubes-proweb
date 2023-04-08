<?php
require("../includes/koneksi.php");

if(isset($_POST['btnCari']))
{
	$user_forgot=$_POST['username'];
  $email_forgot=$_POST['email'];

	$sql = "SELECT * FROM akun WHERE username = '{$user_forgot}'";
	$query = mysqli_query($conn, $sql);

	if(!$query){
		die("Query gagal".mysqli_error($conn));
	}
	while ($row = mysqli_fetch_array($query)){
		$user = $row['username'];
		$pass = $row['password'];
		$nama = $row['nama'];
		$email = $row['email'];
    $peran = $row['role'];
	}
	if($user == $user_forgot && $email == $email_forgot){
		header("Location:../login/prosesforgot.php");
		$_SESSION['username'] = $user;
		$_SESSION['nama'] = $nama;
		$_SESSION['email'] = $email;
    $_SESSION['role'] = $peran; 
    $_SESSION['password'] = $pass;
  } else {
		echo "User tidak ditemukan";
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lupa Password | KEDEBOOK </title>
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link href="asset/img/logo.png" rel="icon" style="width: 100px;">
  <link href="asset/img/logo.png" rel="apple-touch-icon" style="width: 57;">
  
</head>
<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-10 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                
                <div class="col-md-10 col-lg-6 col-xl-5">
  
                  <p class="text-center h1 fw-bold mb-4 underline">Lupa Password</p>
                  <div class="content">
                    <div class="page-inner">
           
                    <!-- <div class="row">
                    <div class="column responsive"> -->
                    <div class="card mt-2">
                        <div class="card-header" style="color:black">
                            <b>Verifikasi Username dan Email</b>
                        </div>
                        <form class="mx-1 mx-md-4" method="POST"> 
                        <div class=" card-body d-flex align-items-center mb-3 mt-3">
                            <i class="fas fa-lock fa-lg fa-fw mt-auto mb-3"></i>
                            <div class="form-outline flex-fill mt-4">
                                <input 
                                type="text" 
                                id="username" 
                                class="form-control"
                                name="username"
                                placeholder="Masukkan username Anda"
                                required />
                            </div>
                        </div>

                        <form class="mx-1 mx-md-4" method="POST"> 
                        <div class=" card-body d-flex align-items-center mb-3 mt-3">
                            <i class="fas fa-lock fa-lg fa-fw mt-auto mb-3"></i>
                            <div class="form-outline flex-fill mt-4">
                                <input 
                                type="email" 
                                id="email" 
                                class="form-control"
                                name="email"
                                placeholder="Masukkan email Anda"
                                required />
                            </div>
                        </div>

                        <div class="justify-content-center mb-4">
                            <div class="card-body d-flex flex-column">
                            <button type="submit" class="btn btn-primary btn" name="btnCari">Cari</button>
                            </div>
                        </div>

                        </form>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>