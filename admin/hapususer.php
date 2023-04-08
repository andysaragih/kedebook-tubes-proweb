<?php
require '../includes/koneksi.php';

$query = "DELETE FROM akun WHERE id = " . $_GET['id'];
$delete = mysqli_query($conn, $query);

if ($delete) {
    $_SESSION['msg'] = 'Berhasil Menghapus Data';
    header('location:datauser.php');
} else {
    $_SESSION['msg'] = 'Gagal Hapus Data!!!';
    header('location:datauser.php');
}
