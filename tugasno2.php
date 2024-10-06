<?php
$bilangan = 2;
$nilai = 0;
    while ($bilangan <= 50) {
$nilai += $bilangan;
$bilangan++;
}
echo"jumlah bilangan dari 2 hingga 50 adalah: ".number_format($nilai, 0,',','.');
?>
