<?php
require '../includes/koneksi.php';

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
                    <li class="breadcrumb-item active">Help Support</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        
        <section class="section dashboard">
                
            <div class="card-header" style="border-radius:5px">
                <h4 class="d-inline-flex ml-5" style="color:black">
                    <b>Help & Support</b>
                </h4>
                <div class="page-inner mt--5">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover">
                                <thead>
                                <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Judul</th>
                                        <th scope="col">Isi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $host = 'localhost';
                                        $user = 'root';
                                        $pass = '';
                                        $database = 'kedebook_kasir';
                                    
                                        $conn = mysqli_connect($host, $user, $pass, $database);
                                        // $query = "SELECT * FROM posting";
                                        // $sql =mysqli_query($conn,$query);

                                        if (isset($_GET['halaman']) && $_GET['halaman']!="") {
                                            $halaman = $_GET['halaman'];
                                            } else {
                                              $halaman = 1;
                                            }
                                            // jumlah data yg ditampilkan dlm 1 halaman
                                            $limit = 4;     

                                        if ($halaman>1){                          

                                        // range data yang ditampilkan
                                        $offset = ($halaman * $limit) - $limit;
                                                } else $offset=0;

                                                $sebelumnya = $halaman - 1;
                                                $selanjutnya = $halaman + 1;

                                                // menghitung jumlah data keseluruhan

                                        $query = mysqli_query($conn,"SELECT * FROM posting"); $jlh_data= mysqli_num_rows($query);       

                                        // menghitung jumlah halaman

                                        $jlh_halaman = ceil($jlh_data / $limit);
                                        $hal_akhir = $jlh_halaman;

                                        $query2 = "SELECT * FROM posting LIMIT $offset, $limit";
                                        $hasil2 = mysqli_query($conn, $query2);

                                        $no = $offset + 1;
                                        while ($data = mysqli_fetch_array($hasil2)) {
                                        ?>
                                        <tr>
                                        <th scope="row"><?= $no++; ?></th>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['tanggal'] ?></td>
                                        <td><?= $data['judul'] ?></td>
                                        <td><?= $data['konten'] ?></td>
                                        <?php } ?>
                                    </tr>
                                  </tbody>
                            </table>
                            <div>
                            <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                                <li class="page-itemS">
                                <a class="page-link" href="?halaman=<?php echo $sebelumnya; ?>" tabindex="-1" tabindex="-1">Previous</a>
                                </li>

                                <?php
                                for ($i=1; $i<=$jlh_halaman; $i++){
                                echo "<li class='page-item'><a class='page-link' href='?halaman=$i'>$i</a></li>";
                                }
                                ?>
                                
                                    <a class="page-link" href="?halaman=<?php echo $selanjutnya; ?>">Next</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="?halaman=<?php echo $jlh_halaman; ?>">Last Page</a>
                                </li>
                            </ul>
                            </nav>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
</main>



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