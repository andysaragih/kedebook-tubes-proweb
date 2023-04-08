<?php
    include '../includes/koneksi.php';
?>
	<?php
							$query = "SELECT * FROM buku WHERE genre='$data[a]'";
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
?>
