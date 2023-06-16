<?php
include'../koneksi/koneksi.php';


$kode = $_GET['kode'];

$sql = "SELECT * FROM mixue WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
$kode = $baris[0]; //kode barang
$nama = $baris[1]; //nama barang
$harga = $baris[2]; //harga barang
$qty = $baris[3]; //qty barang
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <h1>Form Edit</h1>
        <form action="proses-edit.php" method="post">
            <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode" value="<?= $kode ?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?= $nama ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id="" value="<?= $harga ?>"></td>
            </tr>
            <tr>
                <td>Qty</td>
                <td>:</td>
                <td><input type="text" name="qty" id="" value="<?= $qty ?>"></td>
            </tr>
            </table>
            <input type="submit" id="simpan">
        </form>

    
</body>
</html>