<?php
//class Manusia
class Mei{
	//atribut
	var $nama;
	var $warna;

	//fungsi yang akan dijalankan pertama kali
	function __construct(){
		echo "ini adalah isi method construct <br/>";
	}

	//fungsi yang akan dijalankan terakhir
	function __destruct(){
		echo "ini adalah isi method destcurt <br/>";
	}

	//fungsi manusia
	function tampilkan_nama(){
		return "Nama saya Mei Monthyca Manullang <br/>";
	}
}
//instansiasi class manusia
$manusia = new mei();

//memanggil method tampilkan_nama dari class manusia
echo $manusia->tampilkan_nama();
?>