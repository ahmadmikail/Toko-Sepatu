<?php

include_once("../config.php");

$result = mysqli_query($mysqli, "SELECT * FROM penjualan ORDER BY id_penjualan ASC");
?>

<html>

<head>    
    <title>Toko Sepatu</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
<div class="col-sm-12 mx-auto">
<a type="button" class="btn btn-dark" href='../sepatu/index.php'>Kembali</a>
<table width='80%' border=1 class="centered">
            <tr>
            <th>ID</th> <th>ID Sepatu</th> <th>ID Pelanggan</th> <th>Tanggal</th> <th>Edit</th>  <th>Hapus</th>
            </tr>
            <?php
            error_reporting(0);
            while($transaksi = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$transaksi['id_penjualan']."</td>";
                echo "<td>".$transaksi['id_sepatu']."</td>";
                echo "<td>".$transaksi['id_pelanggan']."</td>";
                echo "<td>".$transaksi['tanggal']."</td>";
                echo "<td><a href='edit.php?id_penjualan=$transaksi[id_penjualan]'>Edit</a></td>";
                echo "<td><a href='delete.php?id_penjualan=$transaksi[id_penjualan]'>Hapus</a></td></tr>";

            }  
            ?>
            <a type="button" class="btn btn-success" href='add.php'>Tambah</a>
            <a type="button" class="btn btn-warning" href='../join1.php'>Riwayat Transaksi</a>
        </table>
        </div>
</body>
</html>