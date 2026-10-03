<?php
declare(strict_types=1);

$pilihan = 2;

switch ($pilihan) {
    case 1:
        echo "Lihat saldo\n";
        break;
    case 2:
        echo "Transfer\n";
        break;
    case 3:
        echo "Bayar Tagihan\n";
        break;
    default:
        echo "Pilihan tidak ada.";
        break;
}

$jawab = 'y';

switch ($jawab) {
    case 'y':
    case 'Y':
        echo "Anda menjawab YA.\n";
        break;
    case 'n':
    case 'N':
        echo "Anda menjawab TIDAK\n";
        break;
    default:
        echo "Jawaban tidak dikenal.\n";
        break;
}

$k = 1;
switch ($k) {
    case 1:  echo "satu";
    case 2:  echo "dua";
    case 3:  echo "tiga";
}
echo "\n";
   