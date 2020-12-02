<?php
include_once("config.php");

$id_penjual = $_GET['id_penjual'];

$result = mysqli_query($mysqli,"DELETE FROM penjual WHERE id_penjual = '$id_penjual'");

header("Location:penjual.php");
?>