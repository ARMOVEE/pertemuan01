<?php
declare(strict_types=1);

$sudahLogin = true;
$peran = 'admin';

if ($sudahLogin) {
    if ($peran === 'admin') {
        echo "Selamat datang, Admin . Akses penuh.\n";
    }elseif($peran === 'editor') {
        echo "Selamat datang, operator. Akses terbatas.\n";
    }else {
        echo "peran tidak dikenal.\n";
    }
} else {
    echo "Silahkan Login terlebih dahulu.\n";
}

$terverifikasi = true;
$saldo = 120000;
if ($sudahLogin && $terverifikasi && $saldo >= 100000) {
    echo "Transaksi besar diizinkan.\n";
}