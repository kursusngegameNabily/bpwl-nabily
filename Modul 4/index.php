<?php
	require 'vendor/autoload.php';
	use Carbon\Carbon;

	$sekarang = Carbon::now();

	if ($sekarang->isWeekend()) {
		echo "Party!<br>";
	}else{
		echo "Yah Tugas Lagi :v<br>";
	}

	echo "Sekarang: ".$sekarang."<br>";
	echo "Umur saya: ".Carbon::createFromDate(2000, 12, 8)->age." Tahun<br>";
	echo "Besok: ".$sekarang->addDay()."<br>";
	echo "Bulan depan: ".$sekarang->addMonth()."<br>";
	echo "Tahun depan: ".$sekarang->addYear()."<br>";

	if ($sekarang->isWeekend()) {
		echo "Party!<br>";
	}else{
		echo "Yah Tugas Lagi :v<br>";
	}
?>