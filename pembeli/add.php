<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <title>Tambah Pelanggan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="materialize.min.css">
    </head>
    <body class="container amber lighten-5" id="body-content">
        <h2>Tambah Pelanggan</h2>
        <a href="index.php" class="btn btn-danger">Kembali ke laman utama</a>
        
        <form action="add.php" method="post" name="form1">
            <table>
                <tr>
                    <td>ID Pelanggan</td>
                    <td><input type="text"name="id_pelanggan"></td>
                </tr>
                <tr>
                    <td>Nama Pelanggan</td>
                    <td><input type="text"name="nama_pelanggan"></td>
                </tr>
                <tr>
                    <td>ID Penjualan</td>
                    <td><input type="text"name="id_penjualan"></td>
                </tr>
                <tr>
                    <td>ID Sepatu</td>
                    <td><input type="text"name="id_sepatu"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text"name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"name="Submit" value="Add" class="btn btn-success"></td>
                </tr>
            </table>
        </form>

        <?php
        if(isset($_POST['Submit'])){
            $id_pelanggan=$_POST['id_pelanggan'];
            $nama_pelanggan=$_POST['nama_pelanggan'];
            $id_penjualan=$_POST['id_penjualan'];
            $id_sepatu=$_POST['id_sepatu'];
            $alamat=$_POST['alamat'];

            include_once("../config.php");

            $result=mysqli_query($mysqli, "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, id_penjualan, id_sepatu, alamat)
            VALUES('$id_pelanggan' ,'$nama_pelanggan' ,'$id_penjualan','$id_sepatu','$alamat')");

            echo "Sukses Ditambah<a href='index.php' class='waves-effect waves-light btn'>. Halaman Utama</a>";
        }
        ?>
    </body>
</html>