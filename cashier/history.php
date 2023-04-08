<?php
require ("../includes/koneksi.php");

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
<!--     jQuery -->
<!--     Bootstrap4 files-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/ui.css" rel="stylesheet" type="text/css" />
    <link href="assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/OverlayScrollbars.css" type="text/css" rel="stylesheet" />
<!--    Font awesome 5-->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
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
                <div style="color:black" class="card-header">
                    <b style="font-size:x-large"> History Pembelian </b>
                </div>
                <table class="mt-4" border="2" style="text-align: center">
                    <tr>
                        <th>No</th>
                        <th>Invoice</th>
                        <th>Nama Kasir</th>
                        <th>Total Pembelian</th>
                        <th>Tanggal Pembelian</th>
                    </tr>
                    <?php
                    $x = 1;
                    $ambik = "SELECT * FROM detail_transaksi";
                    $datab = mysqli_query($conn,$ambik);
                     foreach ($datab as $pas):?>
                    <tr>
                        <td><?=$x++?></td>
                        <td><?= $pas['invoice']?></td>
                        <td><?= $pas['kasir']?></td>
                        <td><?= $pas['total_belanja']?></td>
                        <td><?= $pas['tanggal_belanja']?></td>
                    </tr>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>
</section>
<script src="assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/OverlayScrollbars.js" type="text/javascript"></script>
</body>
</html>