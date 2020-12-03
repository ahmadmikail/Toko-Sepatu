<html>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <head>
        <title>Tambah Sepatu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="materialize.min.css">
    </head>
    <body class="container amber lighten-5" id="body-content">
        <h2>Tambah Sepatu</h2>
        <a href="index.php" class="btn btn-danger">Kembali ke laman utama</a>
        
        <form action="add.php" method="post" name="form1">
            <table>
                <tr>
                    <td>ID Sepatu</td>
                    <td><input type="text"name="id_sepatu"></td>
                </tr>
                <tr>
                    <td>Nama Sepatu</td>
                    <td><input type="text"name="nama_sepatu"></td>
                </tr>
                <tr>
                    <td>Jenis Sepatu</td>
                    <td><input type="text"name="jenis_sepatu"></td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td><input type="text"name="ukuran"></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td><input type="text"name="warna"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text"name="harga"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"name="Submit" value="Add" class="btn btn-success"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['Submit'])){
            $id_sepatu=$_POST['id_sepatu'];
            $nama_sepatu=$_POST['nama_sepatu'];
            $jenis_sepatu=$_POST['jenis_sepatu'];
            $ukuran=$_POST['ukuran'];
            $warna=$_POST['warna'];
            $harga=$_POST['harga'];

            include_once("../config.php");

            $result=mysqli_query($mysqli, "INSERT INTO sepatu (id_sepatu, nama_sepatu, jenis_sepatu, ukuran, warna, harga)
            VALUES('$id_sepatu' ,'$nama_sepatu' ,'$jenis_sepatu','$ukuran','$warna','$harga')");

            echo "Sukses Ditambah. <a href='index.php' class='waves-effect waves-light btn'> Halaman Utama</a>";
        }
        ?>
    </body>
</html>