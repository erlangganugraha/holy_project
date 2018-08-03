<?php
class Koneksi extends CI_Model
{
	function Tampil_Data_Utama()
	{
		# code...
		$this->db->select('id_sewa, Film.kode_film, judul_film, Member.kode_member, nama, lama_sewa');
		$this->db->from('film');
		$this->db->join('sewa', 'sewa.kode_film = film.kode_film');
		$this->db->join('member', 'member.kode_member = sewa.kode_member');
		$query = $this->db->get();
		$query = $query->result();
		return $query;
	}
	function Tampil_Data_Film()
	{
		return $this->db->get('Film')->result();

	}
	function Tampil_Data_Member()
	{
		return $this->db->get('Member')->result();

	}
	
	function Tambah_Data_Sewa($data)
	{
		$this->db->insert('sewa',$data);
		return $this->db->affected_rows();
	} 

	function Hapus_Data_Film($id)
	{
		$this->db->delete('film', array('kode_film' => $id));
		return $this->db->affected_rows();
	}

}
?>
