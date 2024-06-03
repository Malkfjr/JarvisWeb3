<?php

function tampilkanGanjil($awal, $akhir) {
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}

function tampilkanGenap($awal, $akhir) {
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 !== 0) {
            echo $i . " ";
        }
    }
}

function hitung ($bil1, $bil2, $operator) {
    switch ($operator) {
        case "+":
            return $bil1 + $bil2;
        case "-":
            return $bil1 - $bil2;
        case "*":
            return $bil1 * $bil2;
        case "/":
            if ($bil2 == 0) {
                echo "[Eror: Pembagi tidak boleh 0";
                return null;
            } else {
                return $bil1 / $bil2;
            }
        default:
            echo "Eror: pembagi tidak boleh 0";
            return null;
    }
}

echo "Angka ganjil antara 1 dan 10: ";
tampilkanGanjil(1, 10);

echo "Angka genap antara 2 dan 20: ";
tampilkanGanjil(2, 20);

echo "\nHasil penjumlahan dari 5 dan 3 adalah: " , hitung("Tambah", 5, 3);
echo "\nHasil pengurangan dari 5 dan 3 adalah: " , hitung("Kurang", 5, 3);
echo "\nHasil pembagian dari 10 dan 2 adalah: " , hitung("Bagi", 10, 2);
echo "\nHasil perkalian dari 5 dan 3 adalah: " , hitung("Kali", 5, 3);

?>

