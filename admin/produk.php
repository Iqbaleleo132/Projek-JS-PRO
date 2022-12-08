<?php 
session_start();
require 'functions.php';

// if(!isset($_SESSION["username"])){
//     echo "
//     <script type='text/javascript'>
//         alert('Silahkan login terlebih dahulu')
//         window.location = '../login/index.php';
//     </script>
//     ";
// }

$user = query("SELECT * FROM produk ");

require '../layout/sidebar.php';

?>


<div class="main">
   <h3>Data Produk</h3>

   <a href="tambahproduk.php" class="tambah">tambah produk</a>
   <table>
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Foto</th>
        <th>Stok</th>
        <th>Deskripsi</th>
    </tr>

   <?php $i = 1; ?>
   <?php foreach($user as $data) :?>
    <tr>
    <td><?= $i; ?></td>
                <td><?= $data['nama_produk']; ?></td>
                <td><?= $data['stock']; ?></td>
                <td><img src="<?= $data['foto']; ?>" alt="" width="80px"></td>
                <td><?= $data['deskripsi']; ?></td>
                <td>
                <a href="" class="edit">Edit</a>
                <a href="hapusproduk.php?id=<?= $data["nama_produk"]; ?>" onClick="return confirm('Anda yakin data ingin dihapus?')" class="hapus">Hapus</a>
            </td> 
    </tr>

    <?php $i++;?>
    <?php endforeach; ?>

    </table>
</div>