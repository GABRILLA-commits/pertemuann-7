<?php
$jumlahUang = 1575250;

// Pecahan Rp. 100.000,-
$sa = floor($jumlahUang / 100000);
$sisa = $jumlahUang % 100000;

// Pecahan Rp. 50.000,-
$sb = floor($sisa / 50000);
$sisa = $sisa % 50000;

// Pecahan Rp. 20.000,-
$sc = floor($sisa / 20000);
$sisa = $sisa % 20000;

// Pecahan Rp. 5.000,-
$sd = floor($sisa / 5000);
$sisa = $sisa % 5000;

// Pecahan Rp. 100,-
$se = floor($sisa / 100);
$sisa = $sisa % 100;

// Pecahan Rp. 50,-
$sf = floor($sisa / 50);
$sisa = $sisa % 50; // Sisa uang terakhir (seharusnya 0)

echo "Jumlah Rp. 100.000 : " . $sa . "<br/>";
echo "Jumlah Rp. 50.000 : " . $sb . "<br/>";
echo "Jumlah Rp. 20.000 : " . $sc . "<br/>";
echo "Jumlah Rp. 5.000 : " . $sd . "<br/>";
echo "Jumlah Rp. 100 : " . $se . "<br/>";
echo "Jumlah Rp. 50 : " . $sf . "<br/>";
?>