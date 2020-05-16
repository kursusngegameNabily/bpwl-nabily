<?php 
// class namaClass
Class Manusia{
	// atribut
	Var $nama;
	Var $warna;

	// fungsi
	function tampilkan_nama() {
		return "Nama saya MEI MONTHYCA MANULLANG <br/>";
	}
	function tampilkan_warna() {
		return "Warna kulit saya putih <br/>";
	}
}
// instansiasi class Manusia
$manusia = new Manusia();

// memanggil fungsi tampilkan_nama dari class Manusia
echo $manusia->tampilkan_nama();

// memanggil fungsi tampilkan_warna dari class Manusia
echo $manusia->tampilkan_warna();
?>