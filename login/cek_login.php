<?php
include '../includes/koneksi.php';

if(isset($_POST['btnLogin']))
{
	$user=$_POST['username'];
	$pass_login=$_POST['password'];
  // $password1=password_verify($pass_login, $_SESSION['password']);

  // $pass = password_verify($pass_login, $data['password']);
  $sql = "SELECT * FROM akun WHERE username = '$user'";
	$query = mysqli_query($conn, $sql);
  $data = mysqli_fetch_assoc($query);
  $cek = mysqli_num_rows($query);
	}
  if ($cek == 1 && password_verify($pass_login, $data['password']) == 1) {
      if ($data['role'] == 'admin') {
        $_SESSION['role'] = 'admin';
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];
        // password_verify($pass_login, $data['password']);
        header('location:../admin/admin.php');
    } else if ($data['role'] == 'kasir') {
        $_SESSION['role'] = 'kasir';
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['email'] = $data['email'];
        // password_verify($pass_login, $data['password']);
        header('location:../cashier/store.php');
    } 
  }
else {
    echo "
      <script>
        alert('Username atau password salah. Silahkan login kembali');
        document.location.href = 'login.php';
      </script>
    ";
}
?>