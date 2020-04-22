<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Data Barang</title>

</head>
<body>

<div id="container">
	<p><?php echo anchor('barang/add','Add Data'); ?></p>
	<p><?php echo anchor('barang/print','Cetak'); ?></p>

	<div id="body">

		<table>
			<tr>
				<th>id</th>
				<th>Barang</th>
				<th>Kategori</th>
				<th>Jumlah</th>
				<th>Action</th>
			</tr>

			<tr>
				<td><?php echo $id_barang ?></td>
				<td><?php echo $barang ?></td>
				<td><?php echo $kategori ?></td>
				<td><?php echo $jumlah ?></td>
				<td>
					<?php echo anchor('barang/edit/'.$j->id_barang,'Edit'); ?>
					<?php echo anchor('barang/hapus_aksi/'.$j->id_barang,'Delete'); ?>
				</td>
			</tr>

			<?php 
			}
			?>

		</table>

	</div>


</div>

</body>
</html>