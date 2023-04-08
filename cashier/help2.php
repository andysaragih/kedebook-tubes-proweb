<?php
require("../includes/koneksi.php");

$user = $_POST['username'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$konten = $_POST['konten'];

$sql = "INSERT INTO posting (username, judul, tanggal, konten) VALUES ('$user', '$judul', '$tanggal', '$konten')";

if($conn->query($sql)===TRUE){
        echo "<script>
            alert('Postingan berhasil dikirim');
            document.location.href = 'help.php';
        </script>";
} else {
echo "Terjadi kesalahan: ".$sql."<br/>".$conn->error;
}

$conn->close();
?>