<?php
require('SiswaRpl.php');
$Siswa3 = new SiswaRpl();
$Siswa3->IsiData("K4161","Wahyu","2003","tangerang");
$Siswa3->CetakData();
$Siswa3->JudulLaporan("Laporan PKL Olimpyq");
$Siswa3->CetakData();
?>