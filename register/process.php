<?php 

require '../koneksi.php';

$nama_lengkap = $_POST["nama_lengkap"];
$password = $_POST["password"];

$query = mysqli_query($conn, "INSERT INTO user VALUES = '$nama_lengkap' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "admin"){
        session_start();

        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["password"] = $data["password"];
        header("Location: ");
    }else if($data["password"] == "costumer"){ 
        session_start();

        $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
        $_SESSION["password"] = $data["password"];

        header("Location: JS PRO\index.php");
    }
}else{
    echo '
        <script type="text/javascript">
            alert("Akun tidak ditemukan");
            window.location: "index.php";
        </script>
    ';
}





?>