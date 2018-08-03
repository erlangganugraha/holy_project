<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Nilai</title>
</head>
<body>
	<h1>Tambah Data Nilai</h1>
	<hr />
	<form method="POST" action="<?=base_url('Nilai/prosesTambah');?>">
		<label>Nim</label>
		<select name="Nim" required>
			<option>-- PILIH NIM --</option>
			<?php
				foreach ($mahasiswa as $row) {
					echo "<option value='".$row->Nim."'>".$row->Nim."</option>";
				}
			?>
		</select>
		<br>
		<br />
		<label>KodeMK</label>
		<select name="KodeMK" required>
			<option>-- PILIH KODE --</option>
			<?php
				foreach ($mata_kuliah as $row) {
					echo "<option value='".$row->KodeMK."'>".$row->KodeMK."</option>";
				}
			?>
		</select>
		<br />
		<br>
		<label>Index</label>
		<input type="text" name="Index" required>
		<br />
		<br>
		<label></label>
		<input type="submit" value="Tambah">
		<input type="reset" value="Reset">
		<br />
</body>
</html>
