<?php
include "db.php";
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM barang WHERE id=$id");
$barang = mysqli_fetch_assoc($data);
?>
<h2>Edit Data Barang</h2>
<form action="edit_aksi.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $barang['id']; ?>">
Nama Barang : <input type="text" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>" required><br><br>
Kategori : <input type="text" name="kategori" value="<?php echo $barang['kategori']; ?>" required><br><br>
Harga Jual : <input type="number" name="harga_jual" value="<?php echo $barang['harga_jual']; ?>" min="0" required><br><br>
Harga Beli : <input type="number" name="harga_beli" value="<?php echo $barang['harga_beli']; ?>" min="0" required><br><br>
Stok : <input type="number" name="stok" value="<?php echo $barang['stok']; ?>" min="0" required><br><br>
Gambar Baru : <input type="file" name="gambar"><br><br>
Gambar Lama : <?php echo ($barang['gambar']!="")? "<img src='upload/".$barang['gambar']."' width='70'>" : "-"; ?><br><br>
<button type="submit">Update</button>
</form>
