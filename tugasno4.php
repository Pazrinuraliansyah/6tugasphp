<?php
$usia = 25;
$jam = 10;
$hari = "sabtu";
function hargatiket($usia,$jam,$hari) {
    if ($usia < 12) {
        $harga = 30000; 
    } elseif ($usia <= 60) {
        $harga = 50000; 
    } else {
        $harga = 35000;
    }
    if ($jam > 17 && $usia >= 12) {
        $harga += 10000; 
    }
    if ($hari === "sabtu" || $hari === "minggu") {
        $harga *= 0.90;
    }
    return $harga; 
}
$totalHarga = hargatiket($usia, $jam, $hari);
echo"total harga tiket adalah: Rp" .number_format($totalHarga, 0, ',', '.');
?>
