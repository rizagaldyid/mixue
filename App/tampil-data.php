<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixue</title>
</head>
<body>
    <h1 >TABEL BARANG MIXUE </h1>
    <?php
   

    include '../koneksi/koneksi.php';

    //syntax untuk menampilkan data
    
    if (isset($_POST['cari'])){
        $keyword = $_POST['keyword'];
        $sql= "SELECT * FROM mixue WHERE kode_barang = '$keyword' OR nama_barang like '%$keyword%'";
    }else{
        $sql = "SELECT * FROM mixue";
    }
   
    $query = mysqli_query($koneksi,$sql);
    $row = mysqli_fetch_all($query, MYSQLI_BOTH);

    if (isset($_GET['pesan'])){
        $pesan = $_GET['pesan'];
        if ($pesan == 'tambah') {
            echo "Data Berhasi Di tambah";
        }
    }
 
    // echo $pesan
    ?>

    <form action="" method="post">
        <label for="cari">cari</label>
        <input type="text" name="keyword" id="cari" autofocus autocomplete="off">
        <button type="submit" name="cari">cari</button>
    </form>

    <a href="tambah-data.php">::Tambah Data::</a>
    <table>
        <tr>
            <td>Kode barang</td>
            <td>Nama Barang</td>
            <td>Harga</td>
            <td>QTY</td>
            <td>Aksi</td>
        </tr>
        <?php
        foreach( $row as $baris){?>
        <tr>
            <td><?=$baris['kode_barang'] ?> </td>
            <td><?=$baris['nama_barang'] ?> </td>
            <td><?=$baris['harga'] ?> </td>
            <td><?=$baris['qty'] ?> </td>
            <td>
                <a href="form-edit.php?kode=<?= $baris['kode_barang'] ?>">Edit</a>
                <a href="delete.php?kode=<?=$baris['kode_barang']?>" onclick="return confirm('Yakin ingin di hapus')">Delete</a>
            </td>
        </tr>

        <?php }?>
    </table>

</body>
</html>

