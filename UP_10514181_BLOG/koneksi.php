<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$nama_db = "10514181_BLOG";

	$koneksi = mysql_connect($host,$user,$pass);
	mysql_select_db($nama_db,$koneksi);

	if($koneksi)
	{
		//echo "koneksi berhasil :)";
	}
	else
	{
		echo "koneksi gagal :(";
	}
?>
