<?php
include "db.php";

$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "upload/";

if (!is_dir($folder)) mkdir($folder);

if ($gambar != "") {
    move_uploaded_file($tmp, $folder.$gambar);
}

mysqli_query($koneksi,"INSERT INTO barang VALUES(null,'$nama','$kategori','$harga_jual','$harga_beli','$stok','$gambar')");

header("location:index.php");
?>
