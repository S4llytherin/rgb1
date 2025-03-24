<?php
session_start(); // Oturumu başlat

// Hata raporlamayı aç
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Formdan gelen sayıları al
if (isset($_POST['sayi1']) && isset($_POST['sayi2'])) {
    $sayi1 = intval($_POST['sayi1']); // Güvenlik için int'e çevir
    $sayi2 = intval($_POST['sayi2']);

    if ($sayi1 > 0 && $sayi2 > 0) {
        $sonuc = "<table>";
        for ($i = 1; $i <= $sayi1; $i++) {
            $sonuc .= "<tr>";
            for ($j = 1; $j <= $sayi2; $j++) {
                $sonuc .= "<td>" . ($i * $j) . "</td>";
            }
            $sonuc .= "</tr>";
        }
        $sonuc .= "</table>";

        // Sonucu oturum değişkenine ata
        $_SESSION['sonuc'] = $sonuc;
    } else {
        $_SESSION['sonuc'] = "Lütfen geçerli sayılar girin.";
    }
} else {
    $_SESSION['sonuc'] = "Eksik veri gönderildi.";
}

// Ana sayfaya geri yönlendir
header("Location: index.html");
exit();
?>
