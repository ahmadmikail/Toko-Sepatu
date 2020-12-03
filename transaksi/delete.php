<?php
include_once('../config.php');

$id_penjualan=$_GET['id_penjualan'];

$result=mysqli_query($mysqli, "DELETE FROM penjualan WHERE id_penjualan=$id_penjualan");

header("Location:index.php");
?>