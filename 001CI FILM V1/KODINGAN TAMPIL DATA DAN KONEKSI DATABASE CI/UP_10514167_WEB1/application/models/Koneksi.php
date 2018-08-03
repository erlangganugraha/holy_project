<?php

/**
* 
*/
class Koneksi extends CI_Model
{
	
	function Tampil_Data_Utama()
	{
		# code...
		$this->db->select('idFilm, judulFilm, tahun, durasiFilm, stokFilm, namaJenis, namaKategori');
		$this->db->from('film');
		$this->db->join('jenis', 'jenis.idJenis = film.idJenis');
		$this->db->join('kategori', 'kategori.idKategori = jenis.idKategori');
		$query = $this->db->get();

		$query = $query->result();

		return $query;
		
	}
}
?>