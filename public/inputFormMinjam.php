<?php 
    include 'koneksi.php';
    $nama = $_POST['nama_peminjam'];
    $kelas = $_POST['kelas'];
    $barang = $_POST['nama_barang'];
    $jumlah = $_POST['jumlah_barang'];
    $tanggal = $_POST['tanggal'];

    $insertData = mysqli_query($koneksi, "INSERT INTO tb_peminjaman VALUES('','$nama','$kelas','$barang','$jumlah','$tanggal')");
    if($insertData){
        header('Location:tablePeminjaman.php?pesan=input');
    }else{
        echo "Ada Kesalahan!";
    }