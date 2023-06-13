<?php

// Halaman ini adalah halaman pengecekan apakah halaman memiliki session atau tidak
// Oleh sebab itu makanya tiap halaman memiliki include halaman ini
session_start();


if (!isset($_SESSION['nama']) && !isset($_SESSION['password'])) {
    // Jika tidak maka diarahkan kembali ke form login
    header("Location: index.php");
    exit();
}
