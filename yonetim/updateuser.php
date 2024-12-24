<?php
include 'ayar.php';

// Tüm kullanıcıları al
$sorgu = $baglan->query("SELECT id, kullanici, sifre FROM kullanici");
while ($row = $sorgu->fetch_assoc()) {
    // Eğer şifre hash'lenmemiş ise (yani $2y$ ile başlamıyorsa)
    if (substr($row['sifre'], 0, 4) !== '$2y$') {
        // Mevcut şifreyi al ve hash'le
        $yeni_hash = password_hash($row['sifre'], PASSWORD_DEFAULT);
        
        // Hash'i güncelle
        $update = $baglan->prepare("UPDATE kullanici SET sifre = ? WHERE id = ?");
        $update->bind_param("si", $yeni_hash, $row['id']);
        $update->execute();
        
        echo "Kullanıcı {$row['kullanici']} için şifre hash'lendi.<br>";
    }
}

echo "İşlem tamamlandı.";
$baglan->close();
?>