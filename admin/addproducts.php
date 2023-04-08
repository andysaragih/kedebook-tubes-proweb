<?php
if ($_POST) {
    include '../includes/koneksi.php';
    $kode_barang = $_POST['kode_barang'];
    $judul_buku = $_POST['judul_buku'];
    $gambar = $_FILES["gambar"]["name"];
    $harga_asli = $_POST['harga_asli'];
    $harga_jual = $_POST['harga_jual'];
    $genre = $_POST['genre'];
    $fiksiorno = $_POST['fiksiorno'];

    if($gambar != ""){
        $ekstensi_diperbolehkan = array('png','jpg','jpeg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $targetDir = "uploads/";
        $file_temp = $_FILES["gambar"]["tmp_name"];
        $angka_acak = rand(1,9999);
        $new_files_name = $angka_acak.'-'.$gambar;
        $targetFilePath = $targetDir . $new_files_name;
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
            if(move_uploaded_file($file_temp,$targetFilePath)){

            $query = "INSERT INTO buku VALUES ('$kode_barang', '$judul_buku', '$new_files_name', '$harga_asli','$harga_jual','$genre','$fiksiorno')";
            $ambil = mysqli_query($conn, $query);

            if ($ambil) {
                echo
                "<script>
                alert('Data berhasil disimpan');
                window.location.href = 'products.php';
                </script>";
            } else {
                echo
                "<script>
                alert('Data gagal disimpan');
                window.location.href = 'products.php';
                </script>";
            }
        }
        }
    }
    
} else {
    echo "No Access";
}

?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
