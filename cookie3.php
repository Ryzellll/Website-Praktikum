<?php
//Menghapus cookie
setcookie("username", "", time() - 3600);
setcookie("namalengkap", "", time() - 3600);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cookie</title>
</head>

<body>
    <h1>Cookie Berhasil dihapus.</h1>
    <h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>
    <h2>Klik <a href='cookie2.php'>di sini</a> untuk pemeriksaan cookies</h2>
</body>

</html>