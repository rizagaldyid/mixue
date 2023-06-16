<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>  
</head>
<body>
        <!-- <?php
        echo $_GET['pesan'];
        ?> -->
        <h1 >Form Tambah Data</h1>
        <form action="proses-tambah.php" method="post">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode" id=""></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id=""></td>
            </tr>
            <tr>
                <td>QTY</td>
                <td>:</td>
                <td><input type="text" name="qty" id=""></td>
            </tr>
        </table>
        <input type= "submit" id= "Simpan">
        <?php
       
        ?>
        </form>
</body>
</html>