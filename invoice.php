<?php
    echo $_POST['nama_produk'];
    echo "<br>";
    echo $_POST['harga_produk'];
    echo "<br>";
    echo $_POST['kategori'];
    echo "<br>";
    echo $_POST['stok'];

    $total_bayar=$_POST['harga_produk']*$_POST['stok'];
    echo "<hr>";
    echo $total_bayar;
?>