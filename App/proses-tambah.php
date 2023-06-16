<?php

        include '../koneksi/koneksi.php';
        error_reporting(1);

    

        echo $kode = htmlspecialchars( $_POST['kode']);
        $nama = htmlspecialchars($_POST ['nama']);
        $harga = htmlspecialchars($_POST ['harga']);
        $qty = htmlspecialchars($_POST ['qty']);

        $sql = "SELECT * FROM mixue WHERE kode_barang ='$kode'";
        $query = mysqli_query($koneksi,$sql);
        $baris = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        
        if ($row >0) {
            header ("Location: tambah-data.php?pesan=kode $baris[kode_barang] Sudah ada");
        }else {
            $sql_insert = "INSERT INTO mixue VALUES ('$kode', '$nama', '$harga', '$qty');";
        $query_insert = mysqli_query($koneksi,$sql_insert);
        if($query_insert){
            echo "Data Berhasil Di Simpan";
            header ( 'Location:tampil-data.php?pesan=tambah' );
            
        }else{
            echo "Data Gagal Disimpan";
            header('Location:tambah-data.php' );

        }    

        

   
    }
        



?> 