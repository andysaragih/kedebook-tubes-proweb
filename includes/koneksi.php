<?php
    if(!isset($_SESSION)){
        session_start();
    }
    // else {
    //     header('location:admin.php');
    // }

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'kedebook_kasir';

    $conn = mysqli_connect($host, $user, $pass, $database);

    if($conn ->connect_error){
        die("Koneksi gagal".$conn ->connect_error);
    } 
?>