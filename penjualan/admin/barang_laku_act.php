<?php 

include 'config.php';
$tgl=$_POST['tgl'];
$nama=$_POST['nama'];
$jumlah=$_POST['jumlah'];


// QUERY UPDATE DATA BARANG 
$dt=mysqli_query($conn, "select * from barang where nama='$nama'");
$data=mysqli_fetch_array($dt);
$harga=$data['harga'];
$sisa=$data['jumlah']-$jumlah;
mysqli_query($conn, "update barang set jumlah='$sisa' where nama='$nama'");
// END QUERY UPDATE

// QUERY TAMBAH DATA BARANG INSERT INTO
$modal=$data['modal'];
$laba=$harga-$modal;
$labaa=$laba*$jumlah;
$total_harga=$harga*$jumlah;
mysqli_query($conn, "insert into barang_laku values('','$tgl','$nama','$jumlah','$harga','$total_harga','$labaa')")or die(mysql_error());
header("location:barang_laku.php");
// END QUERY INSERT INTO

?>