<?php
require '../includes/koneksi.php';

$data = mysqli_query($conn, 'SELECT * FROM akun ORDER BY role');
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
                    <li class="breadcrumb-item active">Data User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
                
            <div class="card-header" style="border-radius:5px">
                
                <h4 class="d-inline-flex ml-5" style="color:black">
                    <b>Data User</b>
                </h4>
                <h4 class="d-inline-flex">
                    <a href="tambahuser.php" class="btn btn-primary justify-content-center" style="border-radius:60px">
                        <i class="bi bi-plus-circle"> Tambah User</i>
                        </a>
                </h4>
                
            <?php if (isset($_SESSION['msg']) && $_SESSION['msg'] <> '') { ?>
        <div class="alert alert-success" role="alert" id="msg">
            <?= $_SESSION['msg']; ?>
        </div>
    <?php }
        $_SESSION['msg'] = ''; ?>
    
        <div class="page-inner mt--5">

            <div class="row">
                <div class="col-md-12">
                            <div class="table-responsive text-center">
                                <table id="basic-datatables" class="display table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 7%;">#</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Role</th>
                                            <th style="width: 10%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        if (mysqli_num_rows($data) > 0) {
                                            while ($user = mysqli_fetch_assoc($data)) {
                                        ?>

                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $user['nama']; ?></td>
                                                    <td><?= $user['username']; ?></td>
                                                    <td><?= $user['password']; ?></td>
                                                    <td><?= $user['role']; ?></td>
                                                    <!-- <td><?php if ($user['jenis_kelamin'] == 'L') {
                                                                    echo "Laki-laki";
                                                                } else {
                                                                    echo "Perempuan";
                                                                } ?>
                                                    </td> -->
                                                    <td>
                                                        <div class="form-button-action">
                                                            <a href="edituser.php?id=<?= $user['id']; ?>" type="button" data-toggle="tooltip" title="" class="btn btn-outline-primary d-flex justify-content-center" data-original-title="Edit">
                                                                <i class="bi bi-pencil"></i>
                                                            </a>
                                                            <a href="hapususer.php?id=<?= $user['id']; ?>" onclick="return confirm('Yakin hapus data?');" type="button" data-toggle="tooltip" title="" class="btn btn-outline-danger mt-2 d-flex justify-content-center" data-original-title="Hapus">
                                                                <i class="bi bi-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                        <?php }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
        </div>

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


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




</body>

</html>

