<?php 
    include 'koneksi.php';
    $nama = $_POST['nama_pengembali'];
    $kelas = $_POST['kelas'];
    $barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah_barang'];
    $tanggal = $_POST['tanggal'];

    $insertData = mysqli_query($koneksi, "INSERT INTO tb_pengembalian VALUES('','$nama','$kelas','$barang','$jumlah','$tanggal')");
    if($insertData){
        header('Location:tablePengembalian.php?pesan=input');
    }else{
        echo "Ada Kesalahan!";
    }