<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
</head>
<body>
<h2>Tambah Data Barang</h2>

<form action="tambah_aksi.php" method="post" enctype="multipart/form-data">
    Nama Barang : <input type="text" name="nama_barang" required><br><br>
    Kategori : <input type="text" name="kategori" required><br><br>
    Harga Jual : <input type="number" name="harga_jual" min="0" required><br><br>
    Harga Beli : <input type="number" name="harga_beli" min="0" required><br><br>
    Stok : <input type="number" name="stok" min="0" required><br><br>
    Gambar : <input type="file" name="gambar"><br><br>
    <button type="submit">Simpan</button>
</form>
</body>
</html>
