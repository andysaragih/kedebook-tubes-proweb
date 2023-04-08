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
            $query = "UPDATE buku SET judul_buku ='$judul_buku', gambar ='$new_files_name', harga_asli='$harga_asli',harga_jual='$harga_jual',genre='$genre',fiksiorno='$fiksiorno' WHERE kode_barang='$kode_barang'";
            $sql = mysqli_query($conn, $query);

                    if(!$sql){
                     die("Query Error : ".mysqli_errno($conn). " - ".mysqli_error($conn));
                    }else{
                     echo
                        "<script>
                        alert('Data berhasil diedit');
                        window.location.href = 'products.php';
                        </script>";
                    }
                }
            }
            else{
                echo
                "<script>
                alert('Ekstensi gambar yang diterima hanya jpg dan png!');
                window.location.href = 'products.php';
                </script>";
            }
            
        }else{
                $query = "UPDATE buku SET judul_buku ='$judul_buku', harga_asli='$harga_asli',harga_jual='$harga_jual',genre='$genre',fiksiorno='$fiksiorno' WHERE kode_barang='$kode_barang'";
                $sql = mysqli_query($conn, $query);
                if(!$sql){
                    die("Query Error : ".mysqli_errno($conn). " - ".mysqli_error($conn));
            }
                 else{
                echo
                "<script>
                alert('Data berhasil diedit');
                window.location.href = 'products.php';
                </script>";
                 }
                }
        
                if ($sql) {
                        echo
                        "<script>
                        alert('Data berhasil diedit');
                        window.location.href = 'products.php';
                        </script>";
                } else {
                        echo
                        "<script>
                        alert('Data gagal diedit');
                        window.location.href = 'products.php';
                        </script>";
                }
}else{
    echo "No Access";
    }


