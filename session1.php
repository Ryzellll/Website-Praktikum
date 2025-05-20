<?php
/***************************************************************
Name file : session1.php
Halaman ini merupakan halaman contoh penciptaan session. Perintah session_start() harus ditaruh di perintah pertama tanpa spasi di depannya. Perintah session_start() harus ada pada setiap halaman yang berhubungan dengan session
***************************************************************/
session_start();
if (isset($_POST['Login'])) {
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    //Periksa login
    if ($user == "mahasiswa" && $pass == "@Mahasiswa") {
        //menciptakan session
        $_SESSION['login'] = $user;
        //menuju ke halaman pemeriksaan session
        echo "<h1>Anda berhasil LOGIN</h1>";
        echo "<h2>Klik <a href='session2.php'>di sini (session2.php)</a> untuk menuju ke halaman pemeriksaan session";
    } else {
        echo "<h2>Login Gagal</h2>";  // <-- Pesan jika login gagal
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Silahkan Login ...</title>
</head>
<body>
    <form action="" method="post">
        <h2>Silahkan Login...</h2>
        Username : <input type="text" name="user"/><br/>
        Password : <input type="password" name="pass"/><br/>
        <input type="submit" name="Login" value="Log In"/>
    </form>
</body>
</html>