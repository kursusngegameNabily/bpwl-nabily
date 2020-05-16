<?php 

class database {
	
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "sosialmedia";
	var $con;

	
	function __construct(){
		$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}
	function tampil_data(){
		$data = mysqli_query($this->con,"select * from data");
		while ($d=mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function input ($nama,$email,$pass){
		mysqli_query($this->con,"insert into user values ('' ,'$nama','$email','$pass')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from user where id='$id'");
	}
	function edit ($id){
		$data = mysqli_query($this->con,"select * from data where id='$id'");
		while ($d=mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}
	function update ($id,$nama,$email,$pass){
		$data = mysqli_query($this->con,"update data set nama='$nama',email='$email',pass='$pass' where id='$id';");
	}
}
