<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>TAMBAH ARTIKEL</h2>
	<hr>

	<form action="" method="POST">

	ID ARTIKEL
	<input type="text" name="idArtikel"><br />

	JUDUL ARTIKEL
	<input type="text" name="namaArtikel"><br />

	KATEGORI
	<select name="idKategori" required>
		<option value="">Pilih Kategori</option>
		<?php 
			$query = mysql_query("SELECT * FROM kategori");
			while($row=mysql_fetch_array($query)){
				echo '<option value="'.$row['idKategori'].'">'.$row['namaKategori'].'</option>';
			} 
		?>
	</select><br />

	PENULIS
	<select name="idAkun" required>
		<option value="">Pilih Penulis</option>
		<?php 
			$query = mysql_query("SELECT * FROM akun");
			while($row=mysql_fetch_array($query)){
				echo '<option value="'.$row['idAkun'].'">'.$row['namaAkun'].'</option>';
			} 
		?>
	</select><br />

	<input type="submit" name="tambah" value="Tambah Daftar Artikel" />    

	</form>


	<?php
		if (isset($_POST['tambah'])){
 
      	$idArtikel = $_POST['idArtikel'];
      	$namaArtikel = $_POST['namaArtikel'];
      	$waktuArtikel = date("Y-m-d h:i:s");
    	$idKategori = $_POST['idKategori'];
	    $idAkun = $_POST['idAkun'];
 
      	$sql = mysql_query("INSERT INTO artikel values ('$idArtikel','$namaArtikel','$waktuArtikel', '$idAkun', '$idKategori')"); // urutan penamaan disamakan dengan tabel db
 
      		if($sql){
				echo "<script type='text/javascript'>alert('Berhasil Ditambah'); window.location='index.php'</script>";
			}else{
				echo "<script type='text/javascript'>alert('Gagal Ditambah'); window.location='index.php'</script>";
			}
		}
	?>



</body>
</html>