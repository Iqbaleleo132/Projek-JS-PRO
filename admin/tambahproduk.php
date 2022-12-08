<?php 
session_start();
require 'functions.php';

if(isset($_POST["kirim"])){
    if(tambahproduk($_POST) > 0){
        echo "
        <script type='text/javascript'>
            alert('Data Produk berhasil ditambahkan');
            window.location = 'produk.php';
        </script>
    ";
    }else{
        echo "
        <script type='text/javascript'>
            alert('Data Produk gagal ditambahkan');
            window.location = 'tambahproduk.php';
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
        <label for="nama_produk">Nama Produk</label>
        <input type="text" name="nama_produk" id="nama_produk" class="form-control"> <br />

        <label for="harga">Harga</label>
        <input type="text" name="harga" id="harga" class="form-control"> 

        <label for="text">Stok</label>
        <input type="text" name="stock" id="foto" class="form-control">
      
        <label for="foto">Foto</label>
        <input type="file" name="foto" id="foto" class="form-control">
      
        <label for="deskripsi">Deskripsi</label>
        <input type="text" name="deskripsi" id="foto" class="form-control">

        <button type="submit" name="kirim">tambah</button>
    </form>

    </div>
</div>