<?php
require ("../includes/koneksi.php") ;

$pass = $_POST['passwordbaru'];
$pass2 = $_POST['passwordkonfir'];
$user = $_POST['username'];

// while($data = mysqli_fetch_assoc("SELECT * FROM akun WHERE username = $user")){
//     $id = $data["id"];
//     $user = $data["username"];
//     $email = $data["email"];
//     $pass = $data["password"];}

if ($pass != $pass2)
{
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
}

    $password = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "UPDATE akun SET password = '$password' WHERE username = '$user'";
    $query = mysqli_query($conn, $sql);

    if($query){
            echo" <script>
                    alert('Berhasil diubah');
                    document.location.href = 'settings.php';
                </script>
            ";

    }else{
        echo"
            <script>
                alert('Gagal Diubah');
            </script>
        ";
    }
    $conn->close();   
?>
