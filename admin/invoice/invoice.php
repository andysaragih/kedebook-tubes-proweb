<?php
require ("../includes/koneksi.php");
if(empty($_SESSION['username'])){
    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kedebook</title>
    <link rel="stylesheet" href="invoice.css">
<!--    <link href="../cashier/assets/css/bootstrap.css" rel="stylesheet" type="text/css" />-->
    <link href="../cashier/assets/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
</head>
<body>
    <div class="page" id="page">
        <div class="top-section">

            <div class="address">
                <div class="adress-content">
                    <h2>KEDEBOOK</h2>
                </div>
            </div>
            <div class="contact">
                <div class="contact-content">
                    <div class="email"> Email: <span class="span"> Kedebook@gmail.com </span></div>
                    <div class="number"> Number: <span class="span"> 501-222-8780 </span></div>
                </div>
            </div>
         </div>
    
<div class="billing-invoice">
    <div class="title">
        Transaksi Pembayaran
    </div>
    <div class="des">
        <?php
        $ran =random_int(001,100);
        $date = date("Ymd");
        $nama="INV-".$date.$ran;
        $tgl = date("d M Y");
        ?>

        <p class="code">
            NO INVOICE: <span><?= $nama; ?></span>
        </p>
        <p class="tanggal">Tanggal: <span><?= $tgl; ?></span></p>
    </div>
</div>

<div class="kasir"> <!--billing to-->
    <div class="title">Kasir:</div>
    <div class="kasir-sec"> <!--billed sec-->
        <div class="name">
            <?php $kasir = $_SESSION['nama'];
            echo $_SESSION['nama'];?>
        </div>
    </div>
</div>

<div class="table">
    <table>
        <tr>
            <th> No </th>
            <th> Buku </th>
            <th> Jumlah </th>
            <th> Harga/unit</th>
            <th> Harga Total </th>
        </tr>
        <?php
        $ola="SELECT * FROM cart";
        $sql=mysqli_query($conn,$ola);
        $nomor = 1;
        $sub = 0;
        foreach ($sql as $produk):
        ?>


        <tr>
            <td> <?= $nomor++?></td>
            <td> <?=$produk['judul_buku']?> </td>
            <td> <?=$produk['qty']?> </td>
            <td> <?=$produk['harga_jual'];?> </td>
            <td> <?= $total=$produk['hargatot'];?> </td>
        </tr>
        <?php $sub += $total?>
        <?php endforeach;?>
<tr>
    <td colspan="4" style="background-color: #243763; color: #fff;" >Total:</td>
    <td style="background-color: #243763; color: #fff;"><?= $sub?> </td>
    <?php
    $nih = "INSERT INTO detail_transaksi VALUES ('$nama','$kasir','$sub','$tgl') ";
    $db = mysqli_query($conn, $nih);
    ?>

</tr>
    </table>
</div>

        </div>
    <button onclick="printDiv('print me')" style="
    width: 120px; display: ;margin: 3rem auto 3rem auto;;color: #fff;
    background-color: #0d6efd;
    border-color: #0d6efd;margin-bottom: 3rem
;"><i class="fa fa-print">Print</i></button>
</body>
<script>
    function printDiv(){
        printcontents = document.getElementById("page").innerHTML;
        var ori = document.body.innerHTML;
        document.body.innerHTML = printcontents;
        window.print();
        document.body.innerHTML = ori;
    }
</script>
</html>