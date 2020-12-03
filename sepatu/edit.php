<?php
include_once("../config.php");

if(isset($_POST['update'])){
    $id_sepatu=$_POST['id_sepatu'];
    $nama_sepatu=$_POST['nama_sepatu'];
    $jenis_sepatu=$_POST['jenis_sepatu'];
    $ukuran=$_POST['ukuran'];
    $warna=$_POST['warna'];
    $harga=$_POST['harga'];

    $result = mysqli_query($mysqli, "UPDATE sepatu SET
    nama_sepatu='$nama_sepatu',jenis_sepatu='$jenis_sepatu',ukuran='$ukuran',warna='$warna',harga='$harga' WHERE id_sepatu=$id_sepatu");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
$id_sepatu=$_GET['id_sepatu'];

$result=mysqli_query($mysqli, "SELECT*FROM sepatu WHERE id_sepatu=$id_sepatu");

while($sepatu=mysqli_fetch_array($result)){
            $nama_sepatu=$sepatu['nama_sepatu'];
            $jenis_sepatu=$sepatu['jenis_sepatu'];
            $ukuran=$sepatu['ukuran'];
            $warna=$sepatu['warna'];
            $harga=$sepatu['harga'];
    ?>

    <head>
        <title>Edit Sepatu</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="materialize.min.css">
    </head>

    <body class="container amber lighten-5" id="body-content">
        <a href="index.php" class="btn btn-danger">Home</a>

        <form name = "update_user" method="post"action="edit.php">
            <table border="0">
                <tr>
                    <td>Nama Sepatu</td>
                    <td><input type="text" value="<?php echo $sepatu['nama_sepatu'] ?>" name="nama_sepatu"></td>
                </tr>
                <tr>
                    <td>Jenis Sepatu</td>
                    <td><input type="text" value="<?php echo $sepatu['jenis_sepatu'] ?>" name="jenis_sepatu"></td>
                </tr>
                <tr>
                    <td>Ukuran</td>
                    <td><input type="text" value="<?php echo $sepatu['ukuran'] ?>" name="ukuran"></td>
                </tr>
                <tr>
                    <td>Warna</td>
                    <td><input type="text" value="<?php echo $sepatu['warna'] ?>" name="warna"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" value="<?php echo $sepatu['harga'] ?>" name="harga"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_sepatu"value=<?php echo $_GET['id_sepatu'];?> class="waves-effect waves-light btn"></td>
                    <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
    </body>
<?php
}
?>
</html>