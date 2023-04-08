<?php
session_start();
if ($_SESSION) {

} else {
    header('location:admin.php');
}

$conn = mysqli_connect("localhost", "root", "", "kedebook");

if (mysqli_connect_error()) {
    echo "Koneksi ke database gagal : " . mysqli_connect_error();
}
