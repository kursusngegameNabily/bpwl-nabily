<?php 
include "../model/database.php";
$db = new database();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
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
<h3>daftar</h3>
		<div class="table-responsive-vertical shadow-z-1">

<a href="input.php">tambah akun</a>

<table id="table" class="table table-hover table-mc-light-blue">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Opsi</th>
	</tr>
	</thead>
<?php
$no = 1;
foreach ($db->tampil_data() as $x) {
	?>
	<tbody>
	<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $x['nama']; ?></td>
		<td><?php echo $x['email']; ?></td>
		<td>
			<a href="edit.php?id=<?php echo $x['id'];?>&aksi=update">Edit</a>
			<a href="proses.php?id=<?php echo $x['id'];?>&aksi=hapus">Hapus</a>
		</td>
	</tr>
	</tbody>
	<?php
}
?>
</table>
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script  src="../script.js"></script>
</body>
</html>