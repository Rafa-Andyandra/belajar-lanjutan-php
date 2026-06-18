<?php
$bilangan = 100;
$pembagi = 3;
$hasilbagi = $bilangan / $pembagi;
$sisabagi = $bilangan % $pembagi;

echo $bilangan . " dibagi dengan " . $pembagi . " adalah " . $hasilbagi . " sisa " . $sisabagi;
?>

<?php

$saldoAwal = 1000000;
$bunga = 0.03;
$bulan = 11;
$saldoAkhir = $saldoAwal - $bunga * $bulan;

echo "Saldo akhir setelah " . $bulan . " bulan adalah: Rp " . $saldoAkhir . ",-";