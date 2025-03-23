<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["sayi1"]) && isset($_POST["sayi2"])) {
    $sayi1 = intval($_POST["sayi1"]);
    $sayi2 = intval($_POST["sayi2"]);

    if ($sayi1 < 1 || $sayi2 < 1) {
        $_SESSION["sonuc"] = "<p>Lütfen 1 veya daha büyük sayılar girin.</p>";
    } else {
        $tablo = "<table>";
        for ($i = 1; $i <= $sayi1; $i++) {
            $tablo .= "<tr>";
            for ($j = 1; $j <= $sayi2; $j++) {
                $r = rand(0, 255);
                $g = rand(0, 255);
                $b = rand(0, 255);
                $tablo .= "<td style='background-color: rgb($r, $g, $b);'>";
                $tablo .= "$i × $j = " . ($i * $j);
                $tablo .= "</td>";
            }
            $tablo .= "</tr>";
        }
        $tablo .= "</table>";

        $_SESSION["sonuc"] = $tablo;
    }
}

header("Location: index.html");
exit();
?>
