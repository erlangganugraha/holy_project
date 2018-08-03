<?php

	include "koneksi.php";

	$idArtikel = $_GET['idArtikel'];
	$sql = mysql_query("DELETE FROM artikel where idArtikel='$idArtikel'");
 

 //alert
	if($sql){
		echo "<script type='text/javascript'>alert('Berhasil Dihapus'); window.location='index.php'</script>";
	}else{
		echo "<script type='text/javascript'>alert('Gagal Dihapus'); window.location='index.php'</script>";
	}
?>