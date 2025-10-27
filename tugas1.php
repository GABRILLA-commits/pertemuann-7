<?php
$saldoAwal = 1000000;
$bunga = 0.0025; // 0,25% dalam desimal
$bulan = 11;

// Perhitungan: Saldo Awal + (Saldo Awal * Bunga * Jumlah Bulan)
$saldoAkhir = $saldoAwal + ($saldoAwal * $bunga * $bulan);

echo "Saldo akhir setelah " . $bulan . " bulan adalah : Rp. " . $saldoAkhir . ".";
?>