<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <style>
        button {
            padding: 5px 10px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }
        .btn-tambah { background-color: #28a745; }
        .btn-edit   { background-color: #007bff; }
        .btn-hapus  { background-color: #dc3545; }

        table { border-collapse: collapse; width: 100%; }
        table, th, td { border: 1px solid black; text-align: center; padding: 8px; }
        th { background-color: #17a2b8; color: white; }
        img { max-width: 70px; height: auto; }
    </style>
</head>
<body>

<h2>Data Barang</h2>
<a href="tambah.php"><button class="btn-tambah">Tambah Baru</button></a>
<br><br>

<table>
<tr>
    <th>Gambar</th>
    <th>Nama Barang</th>
    <th>Kategori</th>
    <th>Harga Jual</th>
    <th>Harga Beli</th>
    <th>Stok</th>
    <th>Aksi</th>
</tr>

<?php
$result = mysqli_query($koneksi,"SELECT * FROM barang");
while($row = mysqli_fetch_assoc($result)){
?>
<tr>
    <td><?php echo ($row['gambar']!="")? "<img src='upload/".$row['gambar']."'>" : "-"; ?></td>
    <td><?php echo $row['nama_barang']; ?></td>
    <td><?php echo $row['kategori']; ?></td>
    <td><?php echo number_format($row['harga_jual']); ?></td>
    <td><?php echo number_format($row['harga_beli']); ?></td>
    <td><?php echo $row['stok']; ?></td>
    <td>
        <a href="edit.php?id=<?php echo $row['id']; ?>"><button class="btn-edit">Edit</button></a>
        <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Yakin hapus?')">
            <button class="btn-hapus">Hapus</button>
        </a>
    </td>
</tr>
<?php } ?>
</table>

</body>
</html>
