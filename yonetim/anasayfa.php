<?php
session_start();

$session_lifetime = 300; 
$cookie_lifetime = 300;  


if (!isset($_SESSION["giris"]) || $_SESSION["giris"] != sha1(md5("var")) || !isset($_COOKIE["kullanici"]) || $_COOKIE["kullanici"] != "msb") {
    header("Location: cikis.php");
    exit();
}


if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > $_SESSION['expire_time'])) {
    
    session_unset();     
    session_destroy();   
    header("Location: cikis.php"); 
    exit();
}


$_SESSION['last_activity'] = time();
$_SESSION['expire_time'] = $session_lifetime;


setcookie(session_name(), session_id(), time() + $cookie_lifetime, "/");
setcookie("kullanici", "msb", time() + $cookie_lifetime, "/");


echo "Yönetim paneline hoş geldiniz!";

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Ana Sayfa</title>
</head>
<body>

<div style="text-align:center;">
    <a href="anasayfa.php">ANA SAYFA</a> - <a href="portfolyo.php">PORTFOLYO</a> - <a href="hakkimizda.php">HAKKIMIZDA</a> - <a href="hizmetlerimiz.php">HİZMETLERİMİZ</a> - <a href="projelerimiz.php">PROJELERİMİZ</a> - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz?')) return false;">ÇIKIŞ</a>
    <br><hr><br><br>
</div>

<h2 style="text-align:center;"> Menüden Seçim Yapınız </h2>

</body>
</html>