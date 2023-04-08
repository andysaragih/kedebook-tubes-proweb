<?php
    require ("../includes/koneksi.php");
    if(empty($_SESSION['username'])){
    header("Location: ../login/login.php");
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

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body>

<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div>
                    <div class="card">
                        <div class="card-body">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-plus-circle"> Add Products</i>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Add Products</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <form class="row" action="addproducts.php"  method="POST" enctype="multipart/form-data" id="forma">
                                        <div class="col-12">
                                        <label for="kodebrg" class="form-label">Kode barang</label>
                                        <input type="text" class="form-control" id="kodebrg" name="kode_barang" required>
                                        </div>
                                        <div class="col-12">
                                        <label for="judulbooks" class="form-label">Judul Buku</label>
                                        <input type="text" class="form-control" id="judulbooks" name="judul_buku" required>
                                        </div>
                                        <div class="col-12">
                                        <label for="gbr" class="form-label">Gambar Buku</label>
                                        <input type="file" class="form-control" id="gbr"name="gambar" required>
                                        </div>
                                        <div class="col-12">
                                        <label for="hargasli" class="form-label">Harga Asli</label>
                                        <input type="number" class="form-control" id="hargasli" name="harga_asli" required>
                                        </div>
                                        <div class="col-12">
                                        <label for="hargajual" class="form-label">Harga Jual</label>
                                        <input type="number" class="form-control" id="hargajual" name="harga_jual" required>
                                        </div>
                                        <div class="col-12">
                                        <label for="genre" class="form-label">Genre</label>
                                        <select name="genre" id="genre" class="form-control" required>
                                            <option value="#">--Pilih genre buku--</option>
                                            <option value="Romance">Romance</option>
                                            <option value="Fantasi">Fantasi</option>
                                            <option value="Misteri">Misteri</option>
                                            <option value="Knowledge">Knowledge</option>
                                            <option value="Self-Improvement">Self-Improvement</option>
                                            <option value="Others">Others</option>
                                       </select>
                                        </div>
                                        <div class="col-12">
                                        <label for="fiksingga" class="form-label">Fiksi / Nonfiksi</label>
                                       <select name="fiksiorno" id="fiksingga" form="forma" class="form-control" required>
                                        <option value="#">--Fiksi atau Nonfiksi--</option>
                                        <option value="Fiksi">Fiksi</option>
                                        <option value="Nonfiksi">Nonfiksi</option>
                                       </select>
                                        </div>
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                        </div>
                                    </form><!-- Vertical Form -->
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bordered Table -->
                            <div class="table-responsive">
                                <table class="table table-bordered mt-3">
                                    <thead>
                                    <tr style="text-align:center">
                                        <th scope="col">No</th>
                                        <th scope="col">Kode Barang</th>
                                        <th scope="col">Judul Buku</th>
                                        <th scope="col">Harga Asli</th>
                                        <th scope="col">Harga Jual</th>
                                        <th scope="col">Gambar</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Fiksi / Nonfiksi</th>
                                        <th scope="col">Aksi</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $host = 'localhost';
                                        $user = 'root';
                                        $pass = '';
                                        $database = 'kedebook_kasir';
                                    
                                        $conn = mysqli_connect($host, $user, $pass, $database);
                                        // $query = "SELECT * FROM buku";
                                        // $sql =mysqli_query($conn,$query);

                                        $limit = 5;
                                        $halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
				                        $halaman_awal = ($halaman>1) ? ($halaman * $limit) - $limit : 0;

                                        $sebelumnya = $halaman - 1;
                                        $selanjutnya = $halaman + 1;
                                        // menghitung jumlah data keseluruhan

                                        $query = mysqli_query($conn,"SELECT * FROM buku"); 
                                        $jlh_data= mysqli_num_rows($query);       

                                        // menghitung jumlah halaman

                                        $jlh_halaman = ceil($jlh_data / $limit);
                                        $hal_akhir = $jlh_halaman;
                                        $query2 = "SELECT * FROM buku LIMIT $halaman_awal, $limit";
                                        $hasil2 = mysqli_query($conn, $query2);

                                        $no = $halaman_awal + 1;
                                        while ($data = mysqli_fetch_array($hasil2)) {
                                        ?>
                                   

                                    <tr>
                                        <th scope="row"><?=$no++?></th>
                                        <td><?= $data['kode_barang'] ?></td>
                                        <td><?= $data['judul_buku'] ?></td>
                                        <td><?= $data['harga_asli'] ?></td>
                                        <td><?= $data['harga_jual'] ?></td>
                                        <td><img src="uploads/<?php echo $data['gambar'];?>" width=40></td>
                                        <td><?= $data['genre'] ?></td>
                                        <td><?= $data['fiksiorno'] ?></td>
                                        <td>
                                        <a onclick="return confirm('Apakah yakin anda ingin menghapus data')" href="deleteproducts.php?kode_barang=<?= $data['kode_barang'] ?>" 
                                        class="btn btn-outline-danger d-flex justify-content-center">
                                             <i class="bi bi-trash"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-primary mt-2 d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#tomboledit<?php echo $data['kode_barang']; ?>">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        </td>
                                    </tr>
                                  </tbody>
                                  <!-- Modal -->
                            <div class="modal fade" id="tomboledit<?php echo $data['kode_barang']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Products</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    
                                    <form class="row" action="editproducts.php"  method="POST" enctype="multipart/form-data">
                                 
                                        <div class="col-12">
                                        <label for="kodebrg" class="form-label">Kode barang</label>
                                        <input type="text" class="form-control" id="kodebrg" name="kode_barang" required value="<?= $data['kode_barang'] ?>" readonly>
                                        </div>
                                        <div class="col-12">
                                        <label for="judulbooks" class="form-label">Judul Buku</label>
                                        <input type="text" class="form-control" id="judulbooks" name="judul_buku" required value="<?= $data['judul_buku'] ?>">
                                        </div>
                                        <div class="col-12">
                                        <label for="gbr" class="form-label">Gambar Buku</label>
                                        <input type="file" class="form-control" id="gbr"name="gambar">
                                        </div>
                                        <div class="col-12">
                                        <label for="hargasli" class="form-label">Harga Asli</label>
                                        <input type="number" class="form-control" id="hargasli" name="harga_asli" required value="<?= $data['harga_asli'] ?>">
                                        </div>
                                        <div class="col-12">
                                        <label for="hargajual" class="form-label">Harga Jual</label>
                                        <input type="number" class="form-control" id="hargajual" name="harga_jual" required value="<?= $data['harga_jual'] ?>">
                                        </div>
                                        <div class="col-12">
                                        <label for="genre" class="form-label">Genre</label>
                                        <select name="genre" id="genre" class="form-control" required>
                                            <?php 
                                            foreach ($genre as $g){
                                                echo "<option value = '$g'";
                                                echo $data['genre'] == $g?'selected="selected"':'';
                                                echo ">$g</option>";
                                            }
                                            ?>
                                            <option value="#">--Pilih genre buku--</option>
                                            <option <?php if($data['genre']=="Romance"){echo "selected";} ?>>Romance</option>
                                            <option <?php if($data['genre']=="Fantasi"){echo "selected";} ?>>Fantasi</option>
                                            <option <?php if($data['genre']=="Misteri"){echo "selected";} ?>>Misteri</option>
                                            <option <?php if($data['genre']=="Knowledge"){echo "selected";} ?>>Knowledge</option>
                                            <option <?php if($data['genre']=="Self-Improvement"){echo "selected";} ?>>Self-Improvement</option>
                                            <option <?php if($data['genre']=="Others"){echo "selected";} ?>>Others</option>
                                       </select>
                                        </div>
                                        <div class="col-12">
                                        <label for="fiksingga" class="form-label">Fiksi / Nonfiksi</label>
                                       <select name="fiksiorno" id="fiksingga" class="form-control" required>
                                       <?php 
                                            foreach ($fiksiorno as $fon){
                                                echo "<option value = '$fon'";
                                                echo $data['fiksiorno'] == $fon?'selected="selected"':'';
                                                echo ">$fon</option>";
                                            }
                                        ?>
                                        <option value="#">--Fiksi atau Nonfiksi--</option>
                                        <option <?php if($data['fiksiorno']=="Fiksi"){echo "selected";} ?>>Fiksi</option>
                                        <option <?php if($data['fiksiorno']=="Nonfiksi"){echo "selected";} ?>>Nonfiksi</option>
                                       </select>
                                        </div>
                                        <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-3" name="submit">Submit</button>
                                        </div>
                                    
                                    </form><!-- Vertical Form -->
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <?php }?>
                                        </tbody>
                              </table>
                            </div>
              <!-- End Bordered Table -->
              <nav aria-label="...">
                            <ul class="pagination justify-content-center">
                                <li class="page-item">
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
        
            
        </section>

    </main><!-- End #main -->


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