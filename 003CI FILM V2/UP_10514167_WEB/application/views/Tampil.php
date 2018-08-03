<!DOCTYPE html>
<html>
<head>
	<title>Data Film</title>
</head>
<body>
	<center><h1>Data Film</h1></center>
	<a href="<?=base_url('film/Tambah');?>">Tambah Data</a>
	<br />
	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Sewa</th>
			<th>Kode Film</th>
			<th>Judul Film</th>
			<th>Kode Member</th>
			<th>Nama</th>
			<th>Lama Sewa</th>
			<th>Aksi</th>
		</tr>
<?php
			foreach ($Film as $no => $row) {
		?>
		<tr>
			<td><?=$no+1;?></td>
			<td><?=$row->id_sewa;?></td>
			<td><?=$row->kode_film;?></td>
			<td><?=$row->judul_film;?></td>
			<td><?=$row->kode_member;?></td>
			<td><?=$row->nama;?></td>
			<td><?=$row->lama_sewa;?></td>
			<td><a href="<?=base_url('film/hapus/'.$row->kode_film);?>">Hapus</a></td>
		</tr>
		<?php
			}
		?>
