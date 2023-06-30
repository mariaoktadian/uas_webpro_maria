<?php 
include 'config.php';
$id=$_GET['id'];
$jumlah=$_GET['jumlah'];
$nama=$_GET['nama'];

// MENGEMBALIKAN JUMLAH BARANG / STOCK
// QUERY SELECT BARANG DAN KEMBALIKAN JUMLAH BARANG SETELAH HAPUS ENTRY PENJUALAN
$a=mysqli_query($conn,"select jumlah from barang where nama='$nama'");
$b=mysqli_fetch_array($a);
$kembalikan=$b['jumlah']+$jumlah;

// MENGUBAH JUMLAH BARANG
// QUERY UPDATE JUMLAH BARANG
$c=mysqli_query($conn,"update barang set jumlah='$kembalikan' where nama='$nama'");

// EKSEKUSI HAPUS ENTRY PENJUALAN
// QUERY DELETE DATA BARANG FROM TABLE BARANG LAKU (ENTRY PENJUALAN)
mysqli_query($conn,"delete from barang_laku where id='$id'");
header("location:barang_laku.php");

 ?>