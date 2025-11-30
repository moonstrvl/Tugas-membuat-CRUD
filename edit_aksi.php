<?php
include "db.php";

$id = $_POST['id'];
$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stok = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$folder = "upload/";

if ($gambar != "") {
    move_uploaded_file($tmp, $folder.$gambar);
    $gambar_query = ", gambar='$gambar'";
} else {
    $gambar_query = "";
}

mysqli_query($koneksi,"UPDATE barang SET 
    nama_barang='$nama',
    kategori='$kategori',
    harga_jual='$harga_jual',
    harga_beli='$harga_beli',
    stok='$stok'
    $gambar_query
WHERE id=$id");

header("location:index.php");
?>
