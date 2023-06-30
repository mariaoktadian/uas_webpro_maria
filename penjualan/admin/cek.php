<?php 
// QUERY VALIDASI LOGIN 
if(!isset($_SESSION['uname'])){
	header("location:../index.php");
}
?>