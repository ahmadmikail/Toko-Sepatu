<?php

include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM pelanggan ORDER BY id_pelanggan ASC");
?>

<html>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<head>    
    <title>Pembeli</title>
</head>

<body>
<div class="col-sm-12 mx-auto">
<a type="button" class="btn btn-dark" href='../sepatu/index.php'>Kembali</a>
<table width='80%' border=1 class="centered">
            <tr>
            <th>ID</th> <th>Nama pelanggan</th> <th>ID Penjualan</th><th>ID Sepatu</th> <th>Alamat</th><th>Edit</th>  <th>Hapus</th>
            </tr>
            <?php
            error_reporting(0);
            while($pembeli = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$pembeli['id_pelanggan']."</td>";
                echo "<td>".$pembeli['nama_pelanggan']."</td>";
                echo "<td>".$pembeli['id_penjualan']."</td>";
                echo "<td>".$pembeli['id_sepatu']."</td>";
                echo "<td>".$pembeli['alamat']."</td>";
                echo "<td><a href='edit.php?id_pelanggan=$pembeli[id_pelanggan]'>Edit</a></td>";
                echo "<td><a href='delete.php?id_pelanggan=$pembeli[id_pelanggan]'>Hapus</a></td></tr>";
            }  
            ?>
            <a type="button" class="btn btn-success" href='add.php'>Tambah</a>
            <a type="button" class="btn btn-warning" href='../join2.php'>Riwayat pelanggan</a>
        </table>
        </div>
</body>
</html>