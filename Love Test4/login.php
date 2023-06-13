<?php

//Data yang dikirim dari form Login lewat metode post
$user = $_POST['username'];
$pass = $_POST['password'];

//Pengecekan username dan pass
if ($user == "admin" && $pass == "admin") {
    // jika sama maka masuk ke sini dan session dimulai
    session_start();
    $_SESSION['nama'] = $user;
    $_SESSION['pass'] = $pass;

    //Di arahkan ke halaman Utama
    header("Location: MainMenu.php");
} else {
    //Jika salah diarahkan kembali ke form login
    header("Location: index.php");
}
