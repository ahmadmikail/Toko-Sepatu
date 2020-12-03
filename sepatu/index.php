<?php

include_once("../config.php");

if(isset($_GET['search'])){
    $key = $_GET['search'];
    $result = mysqli_query($mysqli,"SELECT * FROM sepatu WHERE id_sepatu = '$key'"); 
}else{ 
$result = mysqli_query($mysqli, "SELECT * FROM sepatu ORDER BY id_sepatu ASC");
}


?>

<html>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<head> 
    <title>Toko Sepatu</title>
</head>

<body>
<div class="col-sm-12 mx-auto">
<a type="button" class="btn btn-dark" href='../pembeli/index.php'>Daftar Pembeli</a>
<a type="button" class="btn btn-dark" href='../transaksi/index.php'>Transaksi selesai</a>
    <form class = "d-flex mt-3" action = "index.php" method = "get">    
        <input class = "form-control  mr-2" type = "search" placeholder = "Seach" aria-label = "Search" name = "search">
        <button class = "btn btn-dark" type = "submit">Cari ID</button>
    </form>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<table width='80%' border=1 class="centered">
            <tr>
            <th>ID</th> <th>Nama Sepatu</th> <th>Jenis</th> <th>Ukuran</th> <th>Warna</th> <th>Harga</th>  <th>Edit</th>  <th>Hapus</th>
            </tr>
            <?php
            // error_reporting(0);
            while($sepatu = mysqli_fetch_array($result)){
                echo "<tr>";
                echo "<td>".$sepatu['id_sepatu']."</td>";
                echo "<td>".$sepatu['nama_sepatu']."</td>";
                echo "<td>".$sepatu['jenis_sepatu']."</td>";
                echo "<td>".$sepatu['ukuran']."</td>";
                echo "<td>".$sepatu['warna']."</td>";
                echo "<td>".$sepatu['harga']."</td>";
                echo "<td><a href='edit.php?id_sepatu=$sepatu[id_sepatu]'>Edit</a></td>";
                echo "<td><a href='delete.php?id_sepatu=$sepatu[id_sepatu]'>Hapus</a></td></tr>";
            }  
            ?>
            <a type="button" class="btn btn-success" href='add.php'>Tambah</a>
        </table>
        </div>
</body>
</html>