<?php
include_once("../config.php");

if(isset($_POST['update'])){
    $id_pelanggan=$_POST['id_pelanggan'];
    $nama_pelanggan=$_POST['nama_pelanggan'];
    $id_penjualan=$_POST['id_penjualan'];
    $id_sepatu=$_POST['id_sepatu'];
    $alamat=$_POST['alamat'];

    $result = mysqli_query($mysqli, "UPDATE sepatu SET
    nama_pelanggan='$nama_pelanggan',id_penjualan='$id_penjualan',id_sepatu='$id_sepatu',alamat='$alamat' WHERE id_pelanggan=$id_pelanggan");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<?php
$id_pelanggan=$_GET['id_pelanggan'];

$result=mysqli_query($mysqli, "SELECT*FROM pelanggan WHERE id_pelanggan=$id_pelanggan");

while($pelanggan=mysqli_fetch_array($result)){
            $nama_pelanggan=$pelanggan['nama_pelanggan'];
            $id_penjualan=$pelanggan['id_penjualan'];
            $id_sepatu=$pelanggan['id_sepatu'];
            $alamat=$pelanggan['alamat'];
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
                    <td>Nama Pelanggan</td>
                    <td><input type="text" value="<?php echo $pelanggan['nama_pelanggan'] ?>" name="nama_pelanggan"></td>
                </tr>
                <tr>
                    <td>ID Penjualan</td>
                    <td><input type="text" value="<?php echo $pelanggan['id_penjualan'] ?>" name="id_penjualan"></td>
                </tr>
                <tr>
                    <td>ID Sepatu</td>
                    <td><input type="text" value="<?php echo $pelanggan['id_sepatu'] ?>" name="id_sepatu"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" value="<?php echo $pelanggan['alamat'] ?>" name="alamat"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_pelanggan"value=<?php echo $_GET['id_pelanggan'];?> class="waves-effect waves-light btn"></td>
                    <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
    </body>
<?php
}
?>
</html>