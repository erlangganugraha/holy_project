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
		$this->db->join('Kategori', 'kategori.idKategori = jenis.idKategori');
		$query = $this->db->get();
		$query = $query->result();

		return $query;

	}
	function Hapus_Data_Film($id)
	{
		 $this->db->delete('film', array('idFilm' => $id));
		 return $this->db->affected_rows();
	}

	function Tampil_Data_Jenis()
	{
		return $this->db->get('jenis')-> result();
	}
	function Tambah_Data_Film($data)
	{
		$this->db->insert('film', $data);
		return $this->db->affected_rows();
	}
}
?>
