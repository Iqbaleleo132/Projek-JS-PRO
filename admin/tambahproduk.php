<?php 
session_start();
require 'functions.php';

if(!isset($_SESSION["nama_produk"])){
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

    <h3>Tambah Produk</h3>

   <form action="" method="POST" enctype="multipart/form-data">
        <label for="id_produk">No</label>
        <input type="text" name="id_produk" id="id_produk" class="form-control"> <br />

        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control"> <br />

        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control"> 

        <label for="foto">Foto</label>
        <input type="foto" name="foto" id="foto" class="form-control">
      
        <label for="foto">Stok</label>
        <input type="foto" name="foto" id="foto" class="form-control">
      
        <label for="foto">Deskripsi</label>
        <input type="foto" name="foto" id="foto" class="form-control">

        <label for="role">Roles</label>
        <select name="role" id="role" class="form-control" cols="30" rows="8"></textarea>
            <option value="Admin">Admin</option>
            <option value="Customer">Customer</option>
        </select>
        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>