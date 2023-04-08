<?php
  require ("../includes/koneksi.php") ;
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

        <!-- PASSWORD LAMA DAN BARU -->

        <div class="content">
        <div class="page-inner">
           
            <div class="row">
                <div class="column responsive">
                    <div class="card">
                        <div class="card-header" style="color:black">
                            <b>Ubah Sandi</b>
                        </div>
                        <!-- FORM UBAH SANDI -->
                        <form class="mx-1 mx-md-4" method="POST" action="gantipass3.php">
                            <div class="card-body"> 
                            <div class="d-flex flex-row align-items-center mb-3">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div class="form-outline flex-fill mb-0">
                                    <label for="">Username</label>
                                    <input 
                                    type="text" 
                                    id="username" 
                                    class="form-control"
                                    name="username"
                                    placeholder="Username Anda"
                                    required/>
                                    <label for="">*Verifikasi Username</label>
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
                                    <label for="">Konfirmasi Password Baru</label>
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
                                    <button type="submit" class="btn btn-primary btn" name="btnCari">Cari</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



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