<?php
class Film extends CI_Controller
{
	function index()
	{
		# code...	
	$this->load->model('Koneksi');
		$data['Film']=$this->Koneksi->Tampil_Data_Utama();
		$this->load->view('Tampil', $data);
	}
}

?>