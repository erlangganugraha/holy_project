<?php
class Nilai extends CI_Controller{
	function index()
	{
		# code...	
		$this->load->model('Koneksi');
		$data['Nilai']=$this->Koneksi->Tampil_Data_Utama();
		$this->load->view('Tampil', $data);
	}
	
	function tambah()
	{
		$this->load->model('Koneksi');
		$data['mahasiswa'] = $this->Koneksi->Tampil_Data_Nim();
		$data['mata_kuliah'] = $this->Koneksi->Tampil_Data_Kode();
		$this->load->view('Tambah',$data);
	}
	function prosesTambah()
	{
		$this->load->model('Koneksi');
		$eksekusi = $this->Koneksi->Tambah_Data_Nilai($_POST);

		if($eksekusi){
			$hasil = "Sukses";
		}else{
			$hasil = "Gagal";
		}
			echo '
				<script type="text/javascript">
					alert("Tambah Data '.$hasil.'");
					location = "../";
				</script>
			';
	
	}
	function hapus($Nim)
	{
		$this->load->model('Koneksi');
		$eksekusi = $this->Koneksi->Hapus_Data_Nilai($Nim);

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