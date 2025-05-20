<?php
//Memeriksa cookie
if (isset($_COOKIE['username'])) {
    echo "<h1>Cookie 'username' ada. Isinya : " . $_COOKIE['username'] . "</h1>";
} else {
    echo "<h1>Cookie 'username' TIDAK ada.</h1>";
}
if (isset($_COOKIE['namalengkap'])) {
    echo "<h1>Cookie 'namalengkap' ada. Isinya : " . $_COOKIE['namalengkap'] . "</h1>";
} else {
    echo "<h1>Cookie 'namalengkap' TIDAK ada.</h1>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Cookie</title>
</head>

<body>
    <h2>Klik <a href='cookie1.php'>di sini</a> untuk penciptaan cookies</h2>
    <h2>Klik <a href='cookie3.php'>di sini</a> untuk penghapusan cookies</h2>
</body>

</html>