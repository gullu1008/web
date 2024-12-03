<?php

session_start();
include("ayar.php");

if ($_SESSION["giris"] != sha1(md5("var")) || $_COOKIE["kullanici"] != "msb") {
    header("Location: cikis.php");
    exit(); 
}

$islem = isset($_GET["islem"]) ? $_GET["islem"] : ''; 

if ($islem == "sil") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $sorgu = $baglan->query("DELETE FROM portfolyo WHERE id='$id'");
        echo "<script> window.location.href='portfolyo.php'; </script>";
        exit(); 
    }
}

if ($islem == "ekle") {
    if ($_POST) {
        $baslik = $baglan->real_escape_string($_POST["baslik"]); 
        $resim = "img/".$_FILES["resim"]["name"];
        move_uploaded_file($_FILES["resim"]["tmp_name"], $resim);
        $sorgu = $baglan->query("INSERT INTO portfolyo (baslik, resim) VALUES ('$baslik', '../$resim')");
        echo "<script> window.location.href='portfolyo.php'; </script>";
        exit(); 
    }
}

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Yönetim Paneli Portfolyo</title>
</head>
<body style="text-align:center;">

    <div style="text-align:center;">
        <a href="anasayfa.php">ANA SAYFA</a> - <a href="portfolyo.php">PORTFOLYO</a> - <a href="hakkimizda.php">HAKKIMIZDA</a> - <a href="hizmetlerimiz.php">HİZMETLERİMİZ</a> - <a href="projelerimiz.php">PROJELERİMİZ</a> - <a href="cikis.php" onclick="if (!confirm('Çıkış Yapmak İstediğinize Emin misiniz?')) return false;">ÇIKIŞ</a>
        <br><hr><br><br>
    </div>

    <table width="100%" border="1">
        <tr align="center">
            <th>S. No</th>
            <th>Başlık</th>
            <th>Sil</th>
        </tr>
        <?php
        $sirano = 0;
        $sorgu = $baglan->query("SELECT * FROM portfolyo");
        while ($satir = $sorgu->fetch_object()) {
            $sirano++;
            echo "<tr align='center'>
                <td>$sirano</td>
                <td>$satir->baslik</td>
                <td><a href='portfolyo.php?islem=sil&id=$satir->id'>Sil</a></td>
                </tr>";
        }
        ?>
    </table>

    <br><br>

    <form action="portfolyo.php?islem=ekle" enctype="multipart/form-data" method="post">
        <b>Başlık:</b><input type="text" size="20" name="baslik" required> 
        <b>Resim:</b><input type="file" name="resim" required> 
        <input type="submit" value="Kaydet">
    </form>

</body>
</html>
