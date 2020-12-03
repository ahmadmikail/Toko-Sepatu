<?php
include_once("../config.php");

if(isset($_POST['update'])){
    $id_penjualan=$_POST['id_penjualan'];
    $id_sepatu=$_POST['id_sepatu'];
    $tanggal=$_POST['tanggal'];

    $result = mysqli_query($mysqli, "UPDATE penjualan SET
    id_sepatu='$id_sepatu',tanggal='$tanggal' WHERE id_penjualan=$id_penjualan");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<?php
$id_penjualan=$_GET['id_penjualan'];

$result=mysqli_query($mysqli, "SELECT*FROM penjualan WHERE id_penjualan=$id_penjualan");

while($penjualan=mysqli_fetch_array($result)){
            $id_sepatu=$penjualan['id_sepatu'];
            $id_pelanggan=$penjualan['id_pelanggan'];
            $tanggal=$penjualan['tanggal'];

    ?>

    <head>
        <title>Edit Sepatu</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>

    <body class="container amber lighten-5" id="body-content">
        <a href="index.php" class="btn btn-danger">Home</a>

        <form name = "update_user" method="post"action="edit.php">
            <table border="0">
                <tr>
                    <td>ID Sepatu</td>
                    <td><input type="text" value="<?php echo $penjualan['id_sepatu'] ?>" name="id_sepatu"></td>
                </tr>
                <tr>
                    <td>ID Pelanggan</td>
                    <td><input type="text" value="<?php echo $penjualan['id_pelanggan'] ?>" name="id_sepatu"></td>
                </tr>
                <tr>
                    <td>Tanggal</td>
                    <td><input type="text" value="<?php echo $penjualan['tanggal'] ?>" name="tanggal"></td>
                </tr>
                <tr>
                    <td><input type="hidden" name="id_penjualan"value=<?php echo $_GET['id_penjualan'];?> class="waves-effect waves-light btn"></td>
                    <td><input type="submit" name="update" value="Update" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
    </body>
<?php
}
?>
</html>