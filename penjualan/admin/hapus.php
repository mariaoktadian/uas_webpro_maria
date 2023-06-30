<?php 
include 'config.php';
$id=$_GET['id'];

// QUERY HAPUS DATA BARANG DELETE FROM WHERE ID BARANG
mysqli_query($conn, "delete from barang where id='$id'");
header("location:barang.php");

?>