<?php
include '../koneksi/koneksi.php';

if (isset($_GET['kode'])) {
    header('location: tampil-data.php');
}


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];

$sql = "UPDATE mixue SET nama_barang='$nama', harga= $harga, qty=$qty WHERE kode_barang='$kode'";
$query = mysqli_query($koneksi,$sql);

if ($query){
    header ('location: tampil-data.php');
}else{
    echo "Data Gagal Diupdate";
}