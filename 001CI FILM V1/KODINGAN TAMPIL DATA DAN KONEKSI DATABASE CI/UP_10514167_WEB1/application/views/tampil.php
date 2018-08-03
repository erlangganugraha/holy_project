<!DOCTYPE html>
<html>
<head>
	<title>Data Film</title>
</head>
<body>
	<center><h1>Data Film</h1></center>
	<a href="#">Tambah Data</a>
	<br />
	<table border="1">
		<tr>
			<th>No</th>
			<th>Judul Film</th>
			<th>Tahun Rilis</th>
			<th>Durasi (jam)</th>
			<th>Stok</th>
			<th>Kategori</th>
			<th>Jenis</th>
			<th>Aksi</th>
		</tr>
		<?php
			foreach ($Film as $no => $row) {
		?>
		<tr>
			<td><?=$no+1;?></td>
			<td><?=$row->judulFilm;?></td>
			<td><?=$row->tahun;?></td>
			<td><?=$row->durasiFilm;?></td>
			<td><?=$row->stokFilm;?></td>
			<td><?=$row->namaKategori;?></td>
			<td><?=$row->namaJenis;?></td>
			<td><a href="#">Hapus</a></td>
		</tr>
		<?php
			}
		?>
	
	</table>
</body>
</html>