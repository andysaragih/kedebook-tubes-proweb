<?php
if (isset($_GET['kode_barang'])) {
    include '../includes/koneksi.php';
    $kode_barang = $_GET['kode_barang'];

    $query=mysqli_query($conn, "SELECT * FROM buku WHERE kode_barang='$kode_barang'") or die(mysqli_error());
	$fetch=mysqli_fetch_array($query);
	$location=$fetch['gambar'];

    if(unlink("uploads/$location")){
        $sql=mysqli_query($conn, "DELETE FROM buku WHERE kode_barang='$kode_barang'");

        if ($sql) {
            echo
            "<script>
            alert('Data berhasil dihapus');
            window.location.href = 'products.php';
            </script>";
        } else {
            echo
            "<script>
            alert('Data gagal dihapus');
            window.location.href = 'products.php';
            </script>";
        }
    }

   
} else {
    echo "No Data";
}
