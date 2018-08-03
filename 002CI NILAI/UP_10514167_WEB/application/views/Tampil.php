<!DOCTYPE html>
<html>
<head>
	<title>Data Nilai</title>
</head>
<body>
	<center><h1>Data Nilai</h1></center>
	<a href="<?=base_url('Nilai/Tambah');?>">Tambah Data</a>
	<br />
	<table border="1">
		<tr>
			<th>Nim</th>
			<th>Nama</th>
			<th>KodeMK</th>
			<th>NamaMK</th>
			<th>Index</th>
			<th>Aksi</th>
		</tr>
		<?php
			foreach ($Nilai as $Nim => $row) {
		?>
		<tr>
			<td><?=$row->Nim;?></td>
			<td><?=$row->NamaMhs;?></td>
			<td><?=$row->KodeMK;?></td>
			<td><?=$row->NamaMK;?></td>
			<td><?=$row->Index;?></td>
			<td><a href="<?=base_url('Nilai/hapus/'.$row->Nim);?>">Hapus</a></td>
		</tr>
		<?php
			}
		?>

