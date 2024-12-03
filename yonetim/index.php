<?php
session_start();
include("ayar.php");

if ($_POST) {
    $kullanici = $_POST["kullanici"];
    $sifre = $_POST["sifre"];

    
    $sorgu = $baglan->prepare("SELECT * FROM kullanici WHERE kullanici = ?");
    $sorgu->bind_param("s", $kullanici);
    $sorgu->execute();
    $sonuc = $sorgu->get_result();

    if ($sonuc->num_rows > 0) {
        $kullanici_verisi = $sonuc->fetch_assoc();

        
        if (password_verify($sifre, $kullanici_verisi['sifre'])) {
            
            $session_lifetime = 300; 
            $cookie_lifetime = 300;  

            setcookie("kullanici", "msb", time() + $cookie_lifetime, "/");
            $_SESSION["giris"] = sha1(md5("var"));
            $_SESSION['last_activity'] = time(); 
            $_SESSION['expire_time'] = $session_lifetime; 

            echo "<script> window.location.href='anasayfa.php'; </script>";
        } else {
            echo "<script>
            alert('HATALI ŞİFRE!'); window.location.href='index.php';
            </script>";
        }
    } else {
        echo "<script>
        alert('HATALI KULLANICI ADI!'); window.location.href='index.php';
        </script>";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Giriş</title>
</head>
<body style="text-align:center;padding-top:50px;">
<form action="" method="post">
    <b>Kullanıcı Adı:</b><br>
    <input type="text" name="kullanici" size="30" required><br><br>
    <b>Parola:</b><br>
    <input type="password" name="sifre" size="30" required><br><br><br>
    <input type="submit" value="Giriş Yap">
</form>
</body>
</html>