<?php
$title = 'Edit Data Pengguna';
require '../includes/koneksi.php';

$role = [
    'admin',
    'kasir'
];

$id_user = $_GET['id'];
$query = "SELECT * FROM akun WHERE id = '$id_user'";
$queryedit = mysqli_query($conn, $query);

if (isset($_POST['btn-submit'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $role = $_POST['role'];
    if ($_POST['password'] != null) {
        $password = ($_POST['password']);
        $password2 = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE akun SET nama = '$nama', username = '$username', role = '$role', password = '$password2' WHERE id = '$id_user'";
    } else {
        $query = "UPDATE akun SET nama = '$nama', username = '$username', role = '$role' WHERE id = '$id_user'";
    }

    $update = mysqli_query($conn, $query);
    if ($update == 1) {
        $_SESSION['msg'] = 'Berhasil Update ' . $role;
        header('location:datauser.php');
    } else {
        echo "<div class='alert alert-danger>Gagal Update Data!!!</div>";
        $_SESSION['msg'] = 'Gagal mengupdate data ' . $role . '!!!';
        header('location:datauser.php');
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
                    <li class="breadcrumb-item active"><a href="datauser.php>">Data User</a></li>
                    <li class="breadcrumb-item active">Edit User</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">


<!-- Edit User -->
<div class="content">
    <div class="page-inner">
        <div class="page-header">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <div style="color:black"><b>Edit User</b></div>
                    </div>
                    <?php while ($edit = mysqli_fetch_array($queryedit)) {
                    ?>
                        <form action="" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="largeInput" class="mt-3 mb-2">Nama Pengguna</label>
                                    <input type="text" name="nama" class="form-control form-control" id="defaultInput" value="<?= $edit['nama']; ?>" placeholder="Nama...">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput" class="mt-2 mb-2">Username</label>
                                    <input type="text" name="username" class="form-control form-control" id="defaultInput" value="<?= $edit['username']; ?>" placeholder="Username...">
                                </div>
                                <div class="form-group">
                                    <label for="largeInput" class="mt-2 mb-2">Password</label>
                                    <input type="text" name="password" class="form-control form-control" id="defaultInput">
                                    <i style="color:red; font-size:small">*Kosongkan jika tidak melakukan perubahan password</i>
                                </div>
                                <div class="form-group">
                                    <label for="defaultSelect" class="mt-2 mb-2">Role</label>
                                    <select name="role" class="form-control form-control" id="defaultSelect">
                                        <option value="~">-- Pilih Role-- </option>
                                        <option value="admin">Admin</option>
                                        <option value="kasir">Kasir</option>
                                    </select>
                                </div>
                                <div class="card-action mt-4">
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
<?php } ?>

    
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

