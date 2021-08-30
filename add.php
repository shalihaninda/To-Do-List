<?php

include 'koneksi.php';

    $list_judul = $_POST['list_judul'];
    $sql = "INSERT INTO list VALUES ('','$list_judul')";
    $result = mysqli_query($koneksi,$sql );
        if($result){
            echo "<script>alert('Data berhasil disimpan.');window.location='index.php';</script>";
        }else{  
            echo "<script>alert('Data gagal disimpan.');window.location='index.php';</script>";
        }
?>