<?php 
session_start();

// QUERY HAPUS SESSION SETELAH LOGOUT
session_destroy();

// DIRECT KE INDEX.PHP
header("location:../index.php");
?>