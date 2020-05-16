<?php

$databaseHost = 'localhost';
$databaseName = 'contoh';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if($conn -> connect_errno){
	echo die ("gagal menghubungkan ke Database ".$conn->connect_error);
}
?>