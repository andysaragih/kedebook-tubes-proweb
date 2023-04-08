<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | KEDEBOOK </title>
  <link rel="stylesheet" href="asset/css/bootstrap.css">
  <link href="asset/img/logo.png" rel="icon" style="width: 100px;">
  <link href="asset/img/logo.png" rel="apple-touch-icon" style="width: 57;">
</head>
<body>
  <section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center">
  
                    <img src="asset/img/login.jpg"
                      class="img-fluid" alt="Hero">
    
                  </div>
                <div class="col-md-10 col-lg-6 col-xl-5">
  
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-5">Sign in</p>
  
                  <form class="mx-1 mx-md-4" method="POST" action="cek_login.php">
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                      <div class="form-outline flex-fill mb-0 mt-5">
                        <input 
                        type="text" 
                        id="username" 
                        class="form-control"
                        name="username"
                        placeholder="Username"
                        required />
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-1">
                      <!-- <i class="fas fa-lock fa-lg me-3 fa-fw"></i> -->
                      <div class="form-outline flex-fill">
                        <input 
                        type="password" 
                        id="password" 
                        class="form-control bi bi-eye-slash"
                        name="password"
                        placeholder="Password"
                        required data-eye/>
                        <input type="checkbox" onclick="myFunction()" class="mx-2 align-self-center">
                        <label for="">Show Password</label>
                    </div>
                    </div>
                    
                    <div class="my-2 text-center">
                      <a href="forgot.php">Lupa Password?</a>
                    </div>

                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                      <button type="submit" class="btn btn-primary btn-lg" name="btnLogin">Login</button>
                    </div>

                    <div class="mt-4 text-center">
                        Belum memiliki akun? <a href="register.php">Register</a>
                    </div>
  
                  </form>
  
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
       function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
    </script>
  </section>
</html>