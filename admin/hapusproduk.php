<?php
require 'functions.php';

$id= $_GET["id"];



if(hapusproduk($id) > 0){
    echo"
    <script type='text/javascript'>
        alert('Data Produk berhasil dihapus')
        window.location= 'produk.php';
    </script>
    ";
}else{
    echo"
    <script type='text/javascript'>
        alert('Data produk gagal dihapus')
        window.location= 'produk.php';
    </script>
";

}


?>