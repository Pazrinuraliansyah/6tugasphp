<?php
$penghasilan= 150000000; 
$tanggungan = 3; 
$pekerjaan ="karyawan";
function hitungpajak($penghasilan,$tanggungan,$pekerjaan) {
    $pajak = 0;
    if ($penghasilan<=50000000) {
    $pajak = $penghasilan * 0.05;
    } elseif ($penghasilan<=100000000) {
    $pajak = 2500000 + ($penghasilan-50000000) * 0.10;
    } elseif ($penghasilan<=250000000) {
    $pajak = 7500000 + ($penghasilan-100000000) * 0.15;
    } else {
    $pajak = 37500000 + ($penghasilan-250000000) * 0.20;
    }
    $pengurangan = min($tanggungan,5) * 2000000; 
    $pajak -= $pengurangan;
    if ($pekerjaan == "karyawan") {
    $pajak += 5000000; 
    }
    return $pajak;
}
$pajakakhir = hitungpajak($penghasilan,$tanggungan,$pekerjaan);
echo "pajak yang harus dibayar: Rp" .number_format($pajakakhir, 0, ',', '.');
?>
