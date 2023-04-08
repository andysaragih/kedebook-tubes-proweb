<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | KEDEBOOK </title>
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link href="asset/img/logo.png" rel="icon" style="width: 100px;">
  <link href="asset/img/logo.png" rel="apple-touch-icon" style="width: 57;">
</head>
<body>
  <section class="vh-120" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4">Sign up</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="registeracc.php">
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input 
                        type="text" 
                        id="name" 
                        class="form-control" 
                        name="nama" 
                        placeholder="Your Name"
                        required autofocus />
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input 
                        type="email" 
                        id="name" 
                        class="form-control"
                        name="email"
                        placeholder="Your Email"
                        required />
                      </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input 
                        type="text" 
                        id="username" 
                        class="form-control"
                        name="username"
                        placeholder="Username"
                        required />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input 
                        type="password" 
                        id="password" 
                        class="form-control"
                        name="password"
                        placeholder="Password"
                        required data-eye/>
                        <input type="checkbox" onclick="myFunction()" class="mx-2 align-self-center">
                        <label for="">Show Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-2">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input 
                        type="password" 
                        id="password2" 
                        class="form-control"
                        name="password2"
                        placeholder="Konfirmasi Password"
                        required data-eye/>
                        <input type="checkbox" onclick="myFunction2()" class="mx-2 align-self-center">
                        <label for="">Show Password</label>
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                          <select name="peran" id="peran">
                            <option value="">---Pilih Peran---</option>
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                          </select>
                      </div>
                    </div>
  
                    <!-- <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                      <div class="form-outline flex-fill mb-0">
                        <input type="password" id="form3Example4cd" class="form-control" />
                        <label class="form-label" for="form3Example4cd">Repeat your password</label>
                      </div>
                    </div> -->
  
                    <div class="form-check d-flex justify-content mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                      <label class="form-check-label">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg" name="register">Register</button>
                    </div>

                    <div class="mt-4 text-center">
                      Sudah memiliki akun? <a href="login.php">Login</a>
                    </div>
  
                  </form>
  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="asset/img/register.jpg"
                    class="img-fluid" alt="Hero">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="asset/js/jquery.js"></script>
  <script src="asset/js/bootstrap.js"></script>
  <script>
       function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        function myFunction2() {
          var y = document.getElementById("password2");
          if (y.type === "password") {
            y.type = "text";
          } else {
            y.type = "password";
          }
        }
  </script>
</body>
</html>