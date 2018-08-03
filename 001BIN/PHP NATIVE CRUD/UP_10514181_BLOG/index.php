<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>DAFTAR ARTIKEL</h2>
	<a href="tambah.php">Form Tambah Data</a>
	<table width="75%" border="2" style="border-collapse:collapse;">
		<tr>
			<td align="center">No</td>
			<td align="center">Judul Artikel</td>
			<td align="center">Kategoti</td>
			<td align="center">Penulis</td>
			<td align="center">Waktu Posting</td>
			<td align="center">Aksi</td>
		</tr>

	<?php
		include "koneksi.php";

		$no = 1;
		$sql = mysql_query("SELECT * FROM artikel, akun, kategori where artikel.idAkun=akun.idAkun AND artikel.idKategori=kategori.idKategori");

		while ($row = mysql_fetch_array($sql)) {
	?>
		<tr>
			<td align="center"> <?php echo $no++; ?></td>
			<td align="center"> <?php echo $row['namaArtikel']; ?></td>
			<td align="center"> <?php echo $row['namaKategori']; ?></td>
			<td align="center"> <?php echo $row['namaAkun']; ?></td>
			<td align="center"> <?php echo $row['waktuArtikel']; ?></td>
			<td align="center"> <a href="hapus.php?idArtikel=<?php echo $row['idArtikel'];?>">Hapus</a></td>
		</tr>
	<?php
		}
	?>
	</table>
</body>
</html>