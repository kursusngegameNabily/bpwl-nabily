<?php
//class mei
class Mei{
	//attr
	public $nama;
	public $warna;

	//fungsi meimonthyca
	function tampilkan_nama(){
		return "Nama saya mei monthyca manullang <br/>";
	}
}
//instansiasi class manusia
$mei = new Mei();

//memanggil method tampilkan_nama dari class
echo $mei->tampilkan_nama();
?>