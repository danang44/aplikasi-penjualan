<?php
include_once("config.php");

$id_makanan = $_GET['id_makanan'];

$result = mysqli_query($mysqli,"DELETE FROM makanan WHERE id_makanan = '$id_makanan'");

header("Location:index_admin.php");
?>