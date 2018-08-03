<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Entry Data Film</h1>
	<hr />
	<form method="POST" action="<?=base_url('film/prosesTambah');?>">
		<label>ID Film</label>
		<input type="text" name="idFilm" required>
		<br />
		<label>Judul Film</label>
		<input type="text" name="judulFilm" required>
		<br />
		<label>ID Jenis</label>
		<select name="idJenis" required>
			<option>-- PILIH JENIS --</option>
			<?php
				foreach ($Jenis as $row) {
					echo "<option value='".$row->idJenis."'>".$row->namaJenis."</option>";
				}
			?>
		</select>
		<br />
		<label>Tahun Rilis</label>
		<select name="tahun" required>
			<option>-- PILIH TAHUN --</option>
			<?php
				for ($i=2010; $i<=2017; $i++) {
					echo "<option>".$i."</option>";
				}
			?>
		</select>
		<br />
		<label>Durasi (Jam)</label>
		<input type="text" name="durasiFilm" required>
		<br />
		<label>Stok</label>
		<input type="text" name="stokFilm" required>
		<br />
		<label></label>
		<input type="submit" value="Simpan">
		<input type="reset" value="Reset">
		<br />
</body>
</html>