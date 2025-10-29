<?php
$jumlahUang = 1575250;

$a = (int)($jumlahUang / 100000);
$jumlahUang -= $a * 100000;

$b = (int)($jumlahUang / 50000);
$jumlahUang -= $b * 50000;

$c = (int)($jumlahUang / 20000);
$jumlahUang -= $c * 20000;

$d = (int)($jumlahUang / 5000);
$jumlahUang -= $d * 5000;

$e = (int)($jumlahUang / 100);
$jumlahUang -= $e * 100;

$f = (int)($jumlahUang / 50);
$jumlahUang -= $f * 50;

echo "Jumlah Rp. 100.000 : ".$a. "<br />";
echo "Jumlah Rp. 50.000 : ".$b. "<br />";
echo "Jumlah Rp. 20.000 : ".$c. "<br />";
echo "Jumlah Rp. 5.000 : ".$d. "<br />";
echo "Jumlah Rp. 100 : ".$e. "<br />";
echo "Jumlah Rp. 50 : ".$f. "<br />";
?>
