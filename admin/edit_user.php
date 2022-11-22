<?php 
session_start();
require 'functions.php';

$id = $_GET['id'];
$user = query("SELECT * FROM user WHERE id_user = '$id'")[0];


if(!isset($_SESSION["username"])){
    echo "
    <script type='text/javascript'>
        alert('Silahkan login terlebih dahulu')
        window.location = '../login/index.php';
    </script>
    ";
}

if(isset($_POST["kirim"])){
    if(tambahUser($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data user berhasil ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data user gagal ditambahkan');
            window.location = 'user.php';
        </script>
    ";
    }
}

?>

<?php require '../layout/sidebar.php'?>

<div class="main">
    <div class="box">

    <h3>Tambah User</h3>

   <form action="" method="POST" enctype="multipart/form-data">

        <input type="hidden" name="id_user" value=""<?= $user["id_user"]; ?>>

        <label for="nama_lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control"> <br />


        <label for="nama_lengkap">Username</label>
        <input type="text" name="harga" id="harga" class="form-control"> 

        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">

        <label for="deskripsi">Roles</label>
        <select name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="8"></textarea>
            <option value="Admin">Admin</option>
            <option value="Customer">Customer</option>
        </select>
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>