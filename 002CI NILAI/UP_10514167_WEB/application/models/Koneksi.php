<?php
class Koneksi extends CI_Model
{
	function Tampil_Data_Utama()
	{
		# code...
		$this->db->select('mahasiswa.Nim, NamaMhs, mata_kuliah.KodeMK, NamaMK, Index');
		$this->db->from('mahasiswa');
		$this->db->join('nilai', 'mahasiswa.Nim = nilai.Nim');
		$this->db->join('mata_kuliah', 'mata_kuliah.KodeMK = nilai.KodeMK');
		$query = $this->db->get();
		$query = $query->result();
		return $query;
	}
	function Tampil_Data_Nim()
	{
		return $this->db->get('mahasiswa')->result();

	}
	function Tampil_Data_Kode()
	{
		return $this->db->get('mata_kuliah')->result();

	}
	function Tambah_Data_Nilai($data)
	{
		$this->db->insert('nilai',$data);
		return $this->db->affected_rows();
	} 
	function Hapus_Data_Nilai($Nim)
	{
		$this->db->delete('nilai', array('Nim' => $Nim));
		return $this->db->affected_rows();
	}


}
?>
