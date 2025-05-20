<?php
//Menciptakan cookie
setcookie("username", "mahasiswa", time() + 3600);
setcookie("namalengkap", "belajar", time() + 3600);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cookie</title>
</head>

<body>
    <h1>Ini halaman pengesetan cookie</h1>
    <h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>
</body>

</html>