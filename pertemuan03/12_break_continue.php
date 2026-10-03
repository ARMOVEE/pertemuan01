<?php
declare(strict_types=1);

for ($i=1; $i <= 10; $i++) {
    if ($i %2 === 0) {
        continue;
    }
    if ($i > 7) {
        break;
    }
    echo "$i ";
}
echo "\n";

for ($i=1; $i <= 3; $i++) {
    for ($j= 1; $j <= 3; $j++) {
        if ($i * $j === 6) {
            break 2;
        }
        echo "Ditemukan i=$i, j=$j\n";
    }
}