<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM `tb_pengembalian` WHERE `id` = $id");

$tampil = mysqli_fetch_array($data);

?>

<form action="update_produk.php" method="POST">
    <input type="text" name="id" value="<?php echo $id; ?>" hidden=""><br>
    <input type="text" name="nama_pengembali" value="<?php echo $tampil['nama_pengembali']?>"><br>
    <input type="text" name="kelas" value="<?php echo $tampil['kelas']?>"><br>
    <input type="number" name="nama_barang" value="<?php echo $tampil['nama_barang']?>"><br>
    <input type="number" name="jumlah_barang" value="<?php echo $tampil['jumlah_barang']?>"><br>
    <input type="number" name="tanggal" value="<?php echo $tampil['tanggal']?>"><br>
    <input type="submit" value="kirim">
</form>