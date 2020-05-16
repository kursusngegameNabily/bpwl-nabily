<?php 
include "../model/database.php";
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="../style.css">
<!--===============================================================================================-->
</head>
<body>
	<div id="demo">
<h1>SELAMAT DATANG DI FACE****</h1>
<h2>www.face****.com</h2>
<h3>edit akun</h3>
		<div class="table-responsive-vertical shadow-z-1">
<form action="../controller/proses.php?aksi=update" method="post">
	<?php
	foreach($db->edit($_GET['id'])as $d){
		?>
<table>
	<tr>
		<td>Nama</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $d['id']?>">
			<input type="text" name="nama" value="<?php echo $d['nama'] ?>">
		</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>
			<input type="text" name="email" value="<?php echo $d['email'] ?>">
		</td>
	</tr>
	<tr>
		<td>Pass</td>
		<td>
			<input type="text" name="pass" value="<?php echo $d['pass'] ?>">
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" name="" value="simpan"></td>
	</tr>
</table>
<?php
}
?>
</form>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="../script.js"></script>
</body>
</html>