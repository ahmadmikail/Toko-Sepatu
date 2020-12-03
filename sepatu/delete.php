<?php
include_once('../config.php');

$id_sepatu=$_GET['id_sepatu'];

$result=mysqli_query($mysqli, "DELETE FROM sepatu WHERE id_sepatu=$id_sepatu");

header("Location:index.php");
?>