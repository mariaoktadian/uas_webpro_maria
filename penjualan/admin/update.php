<?php 
include 'config.php';
$id=$_POST['id'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$modal=$_POST['modal'];
$harga=$_POST['harga'];
$jumlah=$_POST['jumlah'];

// QUERY UPDATE DATA BARANG
mysqli_query($conn, "update barang set nama='$nama', jenis='$jenis', modal='$modal', harga='$harga', jumlah='$jumlah' where id='$id'");
header("location:barang.php");

?>