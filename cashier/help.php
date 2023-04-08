<?php
require("../includes/koneksi.php");

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>KedeBook POS</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/kedebook logo.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/kedebook logo.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/kedebook logo.png">
    <!-- jQuery -->
    <!-- Bootstrap4 files-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/OverlayScrollbars.css" type="text/css" rel="stylesheet" />
    <!-- Font awesome 5 -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .avatar {
            vertical-align: middle;
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }

        .bg-default,
        .btn-default {
            background-color: #f2f3f8;
        }

        .btn-error {
            color: #ef5f5f;
        }
    </style>
    <!-- custom style -->
</head>

<body>
<?php include 'header.php'; ?>

<section class="section-content padding-y-sm bg-default ">
    <div class="container-fluid">
        <div class="card padding-y-sm card ">
        <div class="card">
                            <!-- Card Header - Dropdown -->
                            <div style="color:black" class="card-header">
                                <b style="font-size:x-large"> Help Support </b>
                            </div>
                            <!-- Card Body -->
                            <form action="help2.php" method="POST" class="my-login-validation">
                            <div class="form-group card-body">
                               <div class="form-group>
                               <label for="username">Username</label>
                               <input id="username" style="width: 15%;" type="text" class="form-control" name="username" 
                               value="<?php echo $_SESSION['username'];?>" readonly>
                               </div>

                               <div class="form-group>
                               <label for="tanggal">Tanggal</label>
                               <input id="tanggal" style="width: 15%;" type="date" class="form-control" name="tanggal" required data-eye">
                               <div class="invalid-feedback">
                                Tanggal harus diisi
                               </div>
                               </div>

                               <div class="form-group>
                               <label for="judul">Judul</label>
                               <input id="judul" style="width: 20%;" type="text" class="form-control" name="judul" required data-eye">
                               <div class="invalid-feedback">
                                Judul harus diisi
                               </div>
                               </div>

                               <div class="form-group>
                               <label for="Konten">Konten</label>
                               <textarea class="ckeditor mt-2" id="ckeditor" cols="30" rows="10" name="konten"></textarea>
                               <div class="invalid-feedback">
                                Konten belum diisi
                               </div>
                               </div>

                               <div class="form-group m-0">
                                <button type="submit" class="btn btn-primary btn-block mt-2" name="simpanPostingan">
                                Simpan Postingan
                                </button>
                            </div>

                            </div>
                            
                        </div>
                    </div>
        </div>
        </div>
</section>
<script src="assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/OverlayScrollbars.js" type="text/javascript"></script>
<script src="ckeditor/ckeditor.js"></script>
            <script type="text/javascript">
                CKEDITOR.replace('konten',{  
                height: "200px "
                });
            </script>
</body>
</html>