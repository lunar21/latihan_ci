<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Barang</title>

</head>
<body>

	<form action="<?php echo base_url(). 'index.php/barang/tambah_aksi'; ?>" method="post">
		<table>
			<tr>
				<td>ID Barang</td>
				<td><input type="text" name="id_barang"></td>
			</tr>
			<tr>
				<td>Barang</td>
				<td><input type="text" name="barang"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	

</body>
</html>