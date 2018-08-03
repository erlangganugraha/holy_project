<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h1>Entry Data Film</h1>
	<hr />
	<form method="POST" action="<?=base_url('film/prosesTambah');?>">
		<label>Film</label>
		<select name="kode_film" required>
			<option>-- PILIH FILM --</option>
			<?php
				foreach ($Film as $row) {
					echo "<option value='".$row->kode_film ."'>".$row->kode_film."".$row->judul_film."</option>";
				}
			?>
		</select>
		<br />
		<label>Member</label>
		<select name="kode_member" required>
			<option>-- PILIH MEMBER --</option>
			<?php
				foreach ($Member as $row) {
					echo "<option value='".$row->kode_member."'>".$row->kode_member."".$row->nama."</option>";
				}
			?>
		</select>
		<br />
		<label>Lama Sewa</label>
		<select name="lama_sewa" required>
			<option>-- PILIH --</option>
			<?php
				for ($i=1; $i<=7; $i++) {
					echo "<option>".$i."</option>";
				}
			?>
		</select>

		<br />
		<label></label>
		<input type="submit" value="Simpan">
		<br />
</body>
</html>























