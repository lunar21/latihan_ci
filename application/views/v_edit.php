<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Barang</title>

</head>
<body>

		<?php foreach ($jut as $u) {
				# code...
		?>
		<form action="<?php echo base_url(). 'index.php/barang/update_action'; ?>" method="post">
			<table>
				<tr>
					<td>ID Barang</td>
					<td><input type="text" name="id_barang" value="<?= $u->id_barang; ?>"></td>
				</tr>
				<tr>
					<td>Barang</td>
					<td><input type="text" name="barang" value="<?= $u->barang; ?>"></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td><input type="text" name="kategori" value="<?= $u->kategori; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah</td>
					<td><input type="text" name="jumlah" value="<?= $u->jumlah; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>	

		<?php } ?>

</body>
</html>