<?php
//class parent
class Mei{
	//attr class mei
	public $nama_saya;
	//fungsi class mei
	function berinama($saya){
		$this->nama_saya = $saya;
	}
}
//class turunan dari class mei, hubungkan dengan sintak extends
class Teman extends Mei{
	//attr class teman
	public $nama_teman;

	//fungsi class teman
	function berinamateman($teman){
		$this->nama_teman = $teman;
	}
}
//instansiasi class teman
$malasngoding = new Teman();

//fungsi berinama adalah milik class mei, tapi bisa diakses karena telah menghubungkan class teman dengan class mei
$malasngoding->berinama(" mei monthyca ");
$malasngoding->berinamateman(" irma itOOOOk ");

//tampilkan
echo "nama saya : ".$malasngoding->nama_saya."<br/>";
echo "nama teman saya : ".$malasngoding->nama_teman;
?>