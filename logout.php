<?php
// Mulai sesi
session_start();

// Hapus semua data sesi
session_unset();
session_destroy();

// Arahkan pengguna ke halaman login atau halaman lain yang sesuai
header("Location: login.php"); // Ganti login.php dengan halaman yang sesuai
exit();
