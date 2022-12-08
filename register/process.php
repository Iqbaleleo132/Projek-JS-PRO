<?php 

require '../koneksi.php';

$username = $_POST["username"];
$password = $_POST["password"];

$query = mysqli_query($conn, "INSERT INTO user VALUES('$username','$password');");

$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_array($query);

    if($data["roles"] == "admin"){
        session_start();

        $_SESSION["username"] = $data["username"];
        $_SESSION["password"] = $data["password"];
        header("Location: ");
    }else if($data["password"] == "costumer"){ 
        session_start();

        $_SESSION["username"] = $data["username"];
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