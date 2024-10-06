<?php
$penghasilan=15000000; 
$pengalamankerja= 3; 
$statuspekerjaan= "tetap"; 
$hutang=15000000;
$jaminan=50000000;
$riwayatkredit = "baik"; 
function evaluasiKelayakanPinjaman($penghasilan,$pengalamankerja, $statuspekerjaan, $hutang, $jaminan, $riwayatkredit) {
    $layak = true;
    if ($penghasilan<10000000 && !$jaminan) {
        $layak = false;
    }
    switch ($statuspekerjaan) {
    case "tetap":
    if ($pengalamankerja < 2) {
    $layak = false;
     }
    break;
    case "kontrak":
    if ($pengalamankerja < 5) {
    $layak = false;
    }
    break;
    }
    if ($hutang>=20000000) {
    $layak = false;
    }
    if ($riwayatkredit == "buruk") {
    if (!$jaminan || $jaminan < 100000000) {
    $layak = false;
    }
    }
    return $layak;
}
$kelayakan = evaluasiKelayakanPinjaman($penghasilan,$pengalamankerja,$statuspekerjaan,$hutang,$jaminan,$riwayatkredit);
    switch ($kelayakan) {
    case true:
    echo "kelayakan pinjaman : disetujui";
    break;
    case false:
    echo "kelayakan pinjaman : ditolak";
    break;
}
?>
