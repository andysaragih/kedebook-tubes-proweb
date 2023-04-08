<?php
require '../includes/koneksi.php';

$outlet = mysqli_query($conn, "SELECT * FROM akun");
if (isset($_POST['btn-submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $pass = ($_POST['password']);
    $role = $_POST['role'];
    $password = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO akun (nama, username, password, role) values ('$nama', '$username', '$password', '$role')";

    $insert = mysqli_query($conn, $query);
    if ($insert == 1) {
        $_SESSION['msg'] = 'Berhasil menambahkan ' . $role . ' baru';
        header('location:datauser.php');
    } else {
        $_SESSION['msg'] = 'Gagal mengubah data!!!';
        header('location: datauser.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedebook</title>

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
    <link href="assets/css/fonts.css" rel="stylesheet">
    <link href="assets/css/fonts.min.css" rel="stylesheet">
    <link href="assets/fonts/flaticon/flaticon.css" rel="stylesheet">
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
                    <li class="breadcrumb-item active"><a href="datauser.php">Data User</a></li>
                    <li class="breadcrumb-item active">Tambah User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
            
        <!-- TAMBAH USER -->
    <div class="content">
        <div class="page-inner">
           
            <div class="row">
                <div class="column responsive">
                    <div class="card">
                        <div class="card-header" style="color:black">
                            <b>Tambahkan User</b>
                        </div>
                        <form action="tambahuser.php" method="POST">
                            <div class="card-body">

                                <div class="form-group mb-2">
                                    <label for="largeInput" class="mb-2 mt-3">Nama Pengguna</label>
                                    <input type="text" name="nama" class="form-control form-control" id="defaultInput" placeholder="Nama...">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput" class="mb-2">Username</label>
                                    <input type="text" name="username" class="form-control form-control" id="defaultInput" placeholder="Username...">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput" class="mb-2 mt-2">Password</label>
                                    <input type="text" name="password" class="form-control form-control" id="defaultInput" placeholder="Pass...">
                                </div>
                                <div class="form-group">
                                    <label for="defaultSelect"class="mb-2 mt-2">Role</label>
                                    <select name="role" class="form-control form-control mb-4" id="defaultSelect">
                                        <option value="~">-- Pilih Role-- </option>
                                        <option value="admin">Admin</option>
                                        <option value="kasir">Kasir</option>
                                    </select>
                                </div>
                                <div class="card-action">
                                    <button type="submit" name="btn-submit" class="btn btn-success">Submit</button>
                                    <!-- <button class="btn btn-danger">Cancel</button> -->
                                    <a href="javascript:void(0)" onclick="window.history.back();" class="btn btn-danger">Batal</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
    <!-- End #main -->

    
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    
    
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