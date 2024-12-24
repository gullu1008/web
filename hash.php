<?php
include 'yonetim/ayar.php';

$kullanici = "admin";
$sifre = password_hash("Cf4284!.", PASSWORD_DEFAULT);

// Veritabanına kullanıcıyı ekle
$sql = $baglan->prepare("INSERT INTO kullanici (kullanici, sifre) VALUES (?, ?)");
$sql->bind_param("ss", $kullanici, $sifre);

if ($sql->execute()) {
    echo "Kullanıcı başarıyla oluşturuldu.";
} else {
    echo "Hata: " . $sql->error;
}

$baglan->close();
?>
