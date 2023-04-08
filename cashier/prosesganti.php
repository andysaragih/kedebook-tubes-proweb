<?php
  require ("../includes/koneksi.php") ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Password | KEDEBOOK </title>
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link href="asset/img/logo.png" rel="icon" style="width: 100px;">
  <link href="asset/img/logo.png" rel="apple-touch-icon" style="width: 57;">
  <link rel="icon" type="image/png" sizes="32x32" href="img/kedebook logo.png">

</head>
<body>
  <section class="vh-150" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5">

                  <div class="card">
                        <div class="card-header text-center" style="color:black">
                            <b>Ubah Sandi</b>
                        </div>
                        <!-- FORM UBAH SANDI -->
                        <form class="mx-1 mx-md-4" method="POST" action="prosesganti2.php">
                            <div class="card-body"> 
                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0 mt-5">
                                <input 
                                type="text" 
                                id="username" 
                                class="form-control"
                                name="username"
                                value="<?php echo $_SESSION['username'] ?>" readonly>
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label for="">Password Baru</label>
                                    <input 
                                    type="password" 
                                    id="passwordbaru" 
                                    class="form-control"
                                    name="passwordbaru"
                                    placeholder="Masukkan Password Baru"
                                    required data-eye/>
                                    <input type="checkbox" onclick="myFunction()" class="mx-2 align-self-center">
                                    <label for="">Show Password</label>
                                </div>
                                </div>

                                <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label for="">Password Baru</label>
                                    <input 
                                    type="password" 
                                    id="passwordkonfir" 
                                    class="form-control"
                                    name="passwordkonfir"
                                    placeholder="Konfirmasi Password Baru"
                                    required data-eye/>
                                    <input type="checkbox" onclick="myFunction2()" class="mx-2 align-self-center">
                                    <label for="">Show Password</label>
                                </div>
                                </div>
                                </div> 
                                <div class="justify-content-center mb-4">
                                    <div class="card-body d-flex flex-column">
                                    <button type="submit" class="btn btn-primary btn" name="btnCari">Ubah</button>
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
  </section>
  <script>
       function myFunction() {
          var x = document.getElementById("passwordbaru");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        function myFunction2() {
          var y = document.getElementById("passwordkonfir");
          if (y.type === "password") {
            y.type = "text";
          } else {
            y.type = "password";
          }
        }
  </script>
</body>
</html>