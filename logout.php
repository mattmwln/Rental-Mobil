<?php 
session_start();

// Hapus semua data sesi
session_unset();

// Hancurkan sesi
session_destroy();

// Arahkan pengguna ke halaman home sebelum login
header ("Location: home.php");
exit();
?>
