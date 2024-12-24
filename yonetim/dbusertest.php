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
        
        // TEST: Hash'in doğru çalışıp çalışmadığını kontrol edelim
        echo "<pre>";
        echo "TEST BİLGİLERİ:\n";
        echo "Kullanıcı: " . $kullanici . "\n";
        echo "Girilen Şifre: " . $sifre . "\n";
        echo "DB'deki Hash: " . $kullanici_verisi['sifre'] . "\n";
        echo "Yeni Hash Test: " . password_hash($sifre, PASSWORD_DEFAULT) . "\n";
        echo "Password Verify Sonucu: " . (password_verify($sifre, $kullanici_verisi['sifre']) ? "TRUE" : "FALSE") . "\n";
        echo "</pre>";
        die(); // Test için burada duralım
        
        if (password_verify($sifre, $kullanici_verisi['sifre'])) {
            // ... giriş kodu ...
        }
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