<?php
require("../includes/koneksi.php");

if(isset($_POST['btnCari']))
{
	$user_forgot=$_POST['username'];

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
	if($user == $user_forgot){
		header("Location:gantipass2.php");
		$_SESSION['username'] = $user;
		$_SESSION['nama'] = $nama;
		$_SESSION['email'] = $email;
        $_SESSION['role'] = $peran; 
        $_SESSION['password'] = $pass;
    }else {
		echo "User tidak ditemukan";
	}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>KedeBook Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo kedebook.png" rel="icon" style="width: 100px;">
    <link href="assets/img/logo kedebook.png" rel="apple-touch-icon" style="width: 57;">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font.css" rel="stylesheet">
    <link href="assets/css/fonts.min.css" rel="stylesheet">

    <!-- Sweet Alert -->
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Settings</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item active"><a href="settings.php">Settings</a></li>
                    <li class="breadcrumb-item active">Ganti Password</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

<!-- TAMPILAN GANTI PASSWORD -->

    <div class="content">
        <div class="page-inner">
           
            <div class="row">
                <div class="column responsive">
                    <div class="card">
                        <div class="card-header" style="color:black">
                            <b>Verifikasi Username</b>
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
</body>
</html>

            
            <!-- Vendor JS Files -->
            <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
            <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="assets/vendor/chart.js/chart.min.js"></script>
            <script src="assets/vendor/echarts/echarts.min.js"></script>
            <script src="assets/vendor/quill/quill.min.js"></script>
            <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
            <script src="assets/vendor/tinymce/tinymce.min.js"></script>
            <script src="assets/vendor/php-email-form/validate.js"></script>

            <!-- Template Main JS File -->
            <script src="assets/js/main.js"></script>
</body>
</html>


