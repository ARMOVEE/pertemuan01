<?php
declare(strict_types=1);

$i = 10;
do {
    echo "Dijalankan sekali walau i = $i\n";
    $i--;
} while ($i <= 5);

$percobaan = 0;
do {
    $percobaan++;
    $nilai = 30 + $percobaan * 20;
    echo "Percobaan $percobaan, nilai = $nilai\n";
} while ($nilai <=80);
echo "Diperoleh Nilai $nilai setelah $percobaan percobaan\n";