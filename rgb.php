<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Çarpım Tablosu</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            padding: 10px;
            font-size: 20px;
            text-align: center;
            border: 1px solid black;
        }
    </style>
</head>
<body>

    <?php
    if (isset($_GET["sayi1"]) && isset($_GET["sayi2"])) {
        $sayi1 = intval($_GET["sayi1"]);
        $sayi2 = intval($_GET["sayi2"]);

        if ($sayi1 < 1 || $sayi2 < 1) {
            echo "<p>Lütfen 1 veya daha büyük sayılar girin.</p>";
        } else {
            echo "<table>";
            for ($i = 1; $i <= $sayi1; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $sayi2; $j++) {
                    $r = rand(0, 255);
                    $g = rand(0, 255);
                    $b = rand(0, 255);
                    echo "<td style='background-color: rgb($r, $g, $b);'>";
                    echo "$i × $j = " . ($i * $j);
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }
    } else {
        echo "<p>Lütfen giriş sayfasından veri girin.</p>";
    }
    ?>

</body>
</html>
