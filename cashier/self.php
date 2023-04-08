<?php
require ("../includes/koneksi.php");
if(empty($_SESSION['username'])){
    header("Location: ../index.php");
}
?>
<!DOCTYPE HTML>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Bootstrap-ecommerce by Vosidiy">
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
<!-- ========================= SECTION CONTENT ========================= -->
<?php
include '../includes/koneksi.php';
$query="SELECT * FROM buku";
$sql=mysqli_query($conn,$query);
$data=mysqli_fetch_array($sql);

?>
<section class="section-content padding-y-sm bg-default ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 card padding-y-sm card ">
                <ul class="nav bg radius nav-pills nav-fill mb-3 bg" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" href="store.php">
                            <i class="fa fa-tags"></i> All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="romance.php">
                            <i class="fa fa-tags "></i> Romance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="fantasi.php">
                            <i class="fa fa-tags "></i> Fantasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="misteri.php">
                            <i class="fa fa-tags "></i> Misteri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="knowledge.php">
                            <i class="fa fa-tags "></i> Knowledge</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="self.php">
                            <i class="fa fa-tags "></i> Self-Improvement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="others.php">
                            <i class="fa fa-tags "></i> Others</a>
                    </li>
                </ul>
                <span id="items">
							<div class='row'>
							<?php
                            $query = "SELECT * FROM buku WHERE genre ='Self-Improvement'";
                            $result=mysqli_query($conn, $query);

                            foreach ($result as $data) {
                                ?>
                                <div class='col-md-3'>
									   <figure class='card card-product'>
                                           <form method="POST">
											<div class='img-wrap'>
												<img src="../admin/uploads/<?=$data['gambar']?>">
											</div>
									   <figcaption class='info-wrap'>
										   <a href='#' class='title link-produk'><?=$data['judul_buku']?></a>
										   <div class='action-wrap'>
                                               <button type='submit' name='add_to_cart' class='btn btn-primary btn-sm float-right'>
                                               <i class="fa fa-cart-plus">Add</i>
                                               </button>
                                               <form>
                                                   <input type="number" name="qty" value="1" min="1" style="width: 30px;">
                                                   <input type="hidden" name="kodean" value="<?=$data['kode_barang']?>">
                                                    <input type="hidden" name="judul" value="<?=$data['judul_buku']?>">
                                                    <input type="hidden" name="gbr" value="<?=$data['gambar']?>">
                                                   <input type="hidden" name="genre" value="<?=$data['genre']?>">
                                                    <input type="hidden" name="price" value="<?=$data['harga_jual']?>">
                                                    <input type="hidden" name="pricex" value="<?=$data['harga_asli']?>">
                                               </form>
											   <div class='price-wrap h5'>
												   <span class='price-new'><?=$data['harga_jual']?></span>
											   </div>
										   </div>
									   </figcaption>
								   		</figure>
									</div>
                            <?php }
                            ?>


						</div> <!-- row.// -->
					</span>
            </div>

            <div class="col-md-4">
                <div class="card">
                           <span id="cart">
							<table class="table table-hover shopping-cart-wrap">
								<thead class="text-muted">
									<tr>
										<th scope="col">Item</th>
										<th scope="col" width="120" style="text-align: center">Qty</th>
										<th scope="col" width="120">Price</th>
										<th scope="col" class="text-right" width="200">Delete</th>
									</tr>
								</thead>
                                <?php
                                if(isset($_POST['add_to_cart'])) {
                                    $kode_barang = $_POST['kodean'];
                                    $judul_buku = $_POST['judul'];
                                    $genre = $_POST['genre'];
                                    $gambar = $_POST['gbr'];
                                    $harga_jual = $_POST['price'];
                                    $harga_asli = $_POST['pricex'];
                                    $nama = $_SESSION['nama'];
                                    $qty = $_POST['qty'];
                                    $hargaot = $_POST['price'] * $_POST['qty'];

                                    $coba = "SELECT * FROM cart WHERE kode_barang = '$kode_barang'";
                                    $select = mysqli_query($conn,$coba);

                                    if(mysqli_num_rows($select) > 0){
                                        echo "<script>Swal.fire({
                                              icon: 'error',
                                              title: 'Oops...',
                                              text: 'Buku sudah dimasukkan ke keranjang',
                                              })  </script>";
                                    }else{
                                        $insert = "INSERT INTO cart (kode_barang,judul_buku,gambar,harga_jual,harga_asli,nama_kasir,qty,hargatot) VALUES('$kode_barang','$judul_buku','$harga_asli','$gambar','$harga_jual','$nama','$qty','$hargaot')";
                                        $tes = mysqli_query($conn,$insert);
                                        echo"<script>
                                            Swal.fire({
                                              icon: 'success',
                                              title: 'Okeee...',
                                              text: 'Buku dimasukkan ke dalam keranjang',})
                                            </script>";

                                    }
                                }

                                if(isset($_POST['delete'])) {
                                    $kode= $_POST['dapat'];

                                    $apus = "DELETE FROM cart WHERE kode_barang='$kode'";
                                    $jalan = mysqli_query($conn,$apus);

                                    echo "<script>
                                           Swal.fire({
                                                      icon: 'success',
                                                      title: 'Okee...',
                                                      text: 'Buku berhasil dihapus dalam keranjang',})
                                            </script>";


                                }
                                if(isset($_POST['remove'])) {
                                    $remove = "DELETE FROM cart";
                                    $lagi = mysqli_query($conn,$remove);

                                    echo "<script>
                                           Swal.fire({
                                                      icon: 'success',
                                                      title: 'Okee...',
                                                      text: 'Keranjang berhasil direset',})
                                            </script>";


                                }
                                if(isset($_POST['update'])) {
                                    $code = $_POST['apaan'];
                                    $banyak = $_POST['kok'];
                                    $hargaf = $_POST['harg'];
                                    $hargafin = $banyak * $hargaf;
                                    $apdet = "UPDATE cart SET qty='$banyak',hargatot='$hargafin' WHERE kode_barang='$code'";
                                    $go = mysqli_query($conn,$apdet);

                                    echo "<script>
                                           Swal.fire({
                                                      icon: 'success',
                                                      title: 'Yess!!!',
                                                      text: 'Berhasil mengupdate banyak buku',})
                                            </script>";

                                }

                                ?>
								<tbody>
                                 <?php
                                 $query = "SELECT * FROM cart";
                                 $sql=mysqli_query($conn, $query);
                                 $grand_total = 0;
                                 $keys = 0 ;
                                 foreach ($sql as $key=> $product):
                                     ?>
                                     <tr>
										<td>
											<figure class="media">
												<div class="img-wrap"><img src="../admin/uploads/<?=$product['gambar']?>"
                                                                           class="img-thumbnail img-xs"></div>
												<figcaption class="media-body">
													<h6 class="title text-truncate"><?=$product['judul_buku']?></h6>
												</figcaption>
											</figure>
										</td>
										<td class="text-center">
                                            <form method="POST">
											<div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group"
                                                 aria-label="...">
                                                      <input type="hidden" name="apaan" value="<?=$product['kode_barang']?>">
                                                        <input type="hidden" name="harg" value="<?=$product['harga_jual']?>">
                                                     <button type="button" onclick="kurang(<?= $key?>)" class="m-btn btn btn-default"><i
                                                             class="fa fa-minus"></i></button>
												<input type="number" min="1" value="<?=$product['qty']?>"  name="kok" class="byks" style="width: 37.63px;border-color: #F2F3F8;height: 35.75px;font-size: 5">
                                                     <button type="button" onclick="tambah(<?= $key?>)" class="m-btn btn btn-default" style="width: 37.63px;border-color: #F2F3F8;height: 35.75px;"><i
                                                             class="fa fa-plus"></i></button>
                                                <button type="submit" name="update" class="m-btn btn btn-default ml-2" style="width: 37.63px;border-color: #F2F3F8;height: 35.75px;"><i
                                                        class="fa fa-wrench"></i></button>
											</div>
                                                 </form>
										</td>
										<td>
											<div class="price-wrap">
												<var class="price"><?php echo $total=$product['harga_jual'] * $product['qty'];?></var>
											</div> <!-- price-wrap .// -->
										</td>
                                        <form method="post">
                                            <input type="hidden" name="dapat" value="<?=$product['kode_barang']?>">
										<td class="text-right">
											<button name="delete" type="submit" class="btn btn-outline-danger"> <i class="fa fa-trash"></i></button>
										</td>
                                        </form>
                                        <?php $grand_total += (int)$total ;?>

									</tr>
                                 <?php endforeach;?>

								</tbody>
							</table>
						</span>
                </div> <!-- card.// -->
                <div class="box">
                    <dl class="dlist-align">
                        <dt>Total: </dt>
                        <dd class="text-right h4 b" id="tl" class="total_price"> <?= $grand_total?> </dd>
                    </dl>
                    <dl class="dlist-align">
                        <dt>Bayar: </dt>
                        <form method="POST">
                            <div class="ml-auto">
                                <input type="number" name="cash" min="<?= $grand_total?>">
                                <?php
                                $sob = "SELECT * FROM cart";
                                $ada=mysqli_query($conn, $sob);
                                foreach ($ada as $pro): ?>
                                    <input type="hidden" name="pos" value="<?= $pro['kode_barang']?>">
                                <?php endforeach;?>
                                <button type="submit" name="klik"><i class="fa fa-check"></i></button>
                            </div>
                        </form>
                    </dl>
                    <?php
                    if(isset($_POST['klik'])) {
                        $cash = $_POST['cash'];
                        $ops = $_POST['pos'];
                        $balek = $cash - $grand_total;
                        $syntax = "UPDATE cart SET bayar='$cash',kembalian='$balek'WHERE kode_barang='$ops' ";
                        $hai = mysqli_query($conn,$syntax);

                        echo "<dl class='dlist-align'>
                            <dt>Cash : </dt>
                            <dd class='text-right h4 b' id='tl' class='total_price'> $cash</dd>
                        </dl>
                        <dl class='dlist-align'>
                            <dt>Kembalian : </dt>
                            <dd class='text-right h4 b' id='tl' class='total_price'>$balek</dd>
                        </dl>";
                    }?>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <form method="POST">
                                <button type="submit" name="remove" class="btn  btn-default btn-error btn-lg btn-block"><i
                                        class="fa fa-times-circle "></i> Remove </button>
                        </div>
                        <div class="col-md-6">
                            <a href="../invoice/invoice.php" target="_blank" class="btn  btn-primary btn-lg btn-block" id="checkout-btn"><i class="fa fa-shopping-bag"></i>
                                Bayar </a>
                            </form>
                        </div>
                    </div>
                </div> <!-- box.// -->
            </div>
        </div>
    </div><!-- container //  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
<script src="assets/js/jquery-2.0.0.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>
<script src="assets/js/OverlayScrollbars.js" type="text/javascript"></script>
<script>
    $(function () {
        //The passed argument has to be at least a empty object or a object with your desired options
        //$("body").overlayScrollbars({ });
        $("#items").height(552);
        $("#items").overlayScrollbars({
            overflowBehavior: {
                x: "hidden",
                y: "scroll"
            }
        });
        $("#cart").height(445);
        $("#cart").overlayScrollbars({});
    });
</script>
<script type="text/javascript">
    function tambah(idx)
    {
        const InputValue = document.querySelectorAll(".byks");
        let value = parseInt(InputValue[idx].value)+1

        InputValue[idx].value = value
    }
    function kurang(idx)
    {
        const InputValue = document.querySelectorAll(".byks");
        let value = parseInt(InputValue[idx].value)-1
        if(value > 0){

            InputValue[idx].value = value
        }

    }
</script>
</body>

</html>

