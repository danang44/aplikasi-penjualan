<?php
// include database connection file
include_once("config.php");

// Get id from URL to delete that user
$id_jajan = $_GET['id_jajan'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM pembelian WHERE id_jajan='$id_jajan'");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:keranjang.php");
?>
