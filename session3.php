<?php
session_start();
//Menghapus session
unset($_SESSION['login']);
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h1>Anda sudah berhasil LOGOUT</h1>
    <h2>Klik <a href='session1.php'>di sini</a> untuk LOGIN kembali</h2>
    <h2>Anda sekarang tidak bisa masuk ke halaman session2.php lagi</h2>
</body>
</html>