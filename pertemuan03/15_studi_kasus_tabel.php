<?php
declare(strict_types=1);

echo "Tabel Perkalian<br>\n";
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        // Menggunakan &nbsp; agar spasi dari %4d tidak diabaikan oleh browser HTML
        echo str_replace(" ", "&nbsp;", sprintf("%4d", $i * $j));
    }
    echo "<br>\n";
}

echo "<br>\nFaktorial<br>\n";
for ($n = 1; $n <= 6; $n++) {
    $f = 1;
    for ($k = 1; $k <= $n; $k++) {
        $f *= $k;
    }
    echo "$n! = $f<br>\n";
}