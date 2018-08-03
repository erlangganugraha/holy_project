<?php
class Film extends CI_Controller{
	function index()
	{
		# code...	
	
	$this->load->model('Koneksi');
		$data['Film']=$this->Koneksi->Tampil_Data_Utama();
		$this->load->view('Tampil', $data);

	}
function tambah()
	{
		$this->load->model('Koneksi');
		$data['Film'] = $this->Koneksi->Tampil_Data_Film(); 
		$data['Member'] = $this->Koneksi->Tampil_Data_Member(); 
		$this->load->view('Tambah',$data);
	}

function prosesTambah()
	{
		$this->load->model('Koneksi');

		$data_insert['kode_film'] = $this->input->post('kode_film'); 
		$data_insert['kode_member'] = $this->input->post('kode_member'); 
		$data_insert['lama_sewa'] = $this->input->post('lama_sewa'); 
		$eksekusi = $this->Koneksi->Tambah_Data_Sewa($data_insert);

		if($eksekusi){
			$hasil = "Sukses";
		}else{
			$hasil = "Gagal";
		}
			echo '
				<script type="text/javascript">
					alert("Tambah Data '.$hasil.'");
					location = "./";
				</script>
			';
	
	}
function hapus($id)
	{
		$this->load->model('Koneksi');
		$eksekusi = $this->Koneksi->Hapus_Data_Film($id);

		if($eksekusi){
			$hasil = "Sukses";
		}else{
			$hasil = "Gagal";
		}
			echo '
				<script type="text/javascript">
					alert("Hapus '.$hasil.'");
					location = "../";
				</script>
			';
	}

}
?>
