<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT a.tanggal , b.ukuran, c.nama_pelanggan, c.alamat FROM penjualan a INNER JOIN sepatu b ON a.id_sepatu = b.id_sepatu INNER JOIN pelanggan c on a.id_pelanggan = c.id_pelanggan");

?>

<html>
    <head>
        <title>Riwayat Transaksi</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>

    <body class="container amber lighten-5" id="body-content">
        <h2>Riwayat transaksi</h2>
        
        
        <table width='80%' border=1 class="centered">
            <tr>
                <th>Tanggal</th><th>Ukuran</th><th>Nama Pelanggan</th><th>Alamat</th>
            </tr>
            <?php
            while($trans = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$trans['tanggal']."</td>";
                echo "<td>".$trans['ukuran']."</td>";
                echo "<td>".$trans['nama_pelanggan']."</td>";
                echo "<td>".$trans['alamat']."</td></tr>";
            }
            ?>
            <a type="button" class="btn btn-success" href='./pembeli/index.php'>Kembali</a>
        </table>
    </body>
</html>