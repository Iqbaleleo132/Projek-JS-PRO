<?php

require '../koneksi.php';

function query($query){
    global $conn;

    $rows = [];
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambahUser($data){
    global $conn;
    $username = $data["username"];
    $nama_lengkap = $data["nama_lengkap"];
    $password = $data["password"];
    $roles = $data["roles"];
    $query = "INSERT INTO user VALUES(NULL, '$username', '$nama_lengkap', '$password', '$roles')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
} 

function hapusUser($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id_user = '$id'");

    return mysqli_affected_rows($conn);
}
function editUser($data){
    global $conn;

    $id = $data["id_user"];
    $nama_lengkap = htmlspecialchars($data["nama_lengkap"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);
    $roles = htmlspecialchars($data["roles"]);

    $query = "UPDATE user SET
    nama_lengkap = '$nama_lengkap', username = '$username', password = '$password', roles = '$roles'
    WHERE id_user = '$id'
    ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function tambahproduk($data){
    global $conn;

    $nama_produk = htmlspecialchars($data["nama_produk"]);
    $harga = htmlspecialchars($data["harga"]);
    $foto = $_FILES["foto"]["foto"];
    $stok = htmlspecialchars($data["stok"]);
    $deskripsi = htmlspecialchars($data["deskripsi"]);

    $query = "INSERT INTO produk VALUES(NULL, '$nama_produk', '$harga', '$foto', '$stok', '$deskripsi')";
    move_upload_file($files, "../foto/".$foto);

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
?>