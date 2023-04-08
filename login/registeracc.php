<?php
      require_once'../includes/koneksi.php';

      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $user = strtolower(stripslashes($_POST['username']));
      $pass = $_POST['password'];
      $pass2 = $_POST['password2'];
      $password = password_hash($pass, PASSWORD_DEFAULT);
      $peran = $_POST['peran'];

      $sql = "INSERT INTO akun (nama, email, username, password, role) VALUES ('$nama', '$email', '$user', '$password', '$peran')";

      $cekEmail = mysqli_query($conn, "SELECT email FROM akun WHERE email='$email'");
      $cekUsername = mysqli_query($conn, "SELECT username FROM akun WHERE username='$user'");

        if ($pass !== $pass2 ) {
            echo "<script>
                    alert('Konfirmasi password tidak sesuai!');
                </script>";
                return false;
        }
        
        if(mysqli_num_rows($cekEmail) > 0){
            echo"
                <script>
                    alert('Email Sudah Ada!');
                    document.location.href = 'register.php';
                </script>
            ";
        }else if(mysqli_num_rows($cekUsername) > 0){
            echo"
                <script>
                    alert('Username Sudah Ada!');
                    document.location.href = 'register.php';
                </script>
            ";
        }else{
            mysqli_query($conn, $sql);
            echo"
            <script>
                alert('Registrasi Akun Berhasil');
                document.location.href = 'login.php';
            </script>";
        }
      $conn->close();   
?>