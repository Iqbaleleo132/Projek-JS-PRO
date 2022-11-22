<?php 

require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "admin"){
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];
        header("Location: ../admin/index.php");
    }else if($data["roles"] == "costumer"){ 
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];

        header("Location: ../afterlog.php");   
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