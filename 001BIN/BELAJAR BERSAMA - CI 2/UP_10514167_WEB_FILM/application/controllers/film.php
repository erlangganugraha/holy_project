<?php
/**
* 
*/
class Film extends CI_Controller
{
	
	function index()
	{
		# code...
		$this->load->model('Koneksi');
		$data['Film']=$this->Koneksi->Tampil_Data_Utama();

		$this->load->view('Tampil', $data);

	}
	function hapus($id)
	{
		$this->load->model('Koneksi');
		$eksekusi = $this->Koneksi->Hapus_Data_Film($id);
		if ($eksekusi) {
			# code...
			echo "SUKSES";
		}
		else{
			echo "GAGAL";
		}
	echo '
	<script type="text/javascript">
	alert("Hapus '.$hasil. ' ");
	location = "../";
	</script>
	';
}
	function tambah()
	{
		$this->load->model('koneksi');
		$data['Jenis'] = $this->koneksi->Tampil_Data_Jenis();
		$this->load->view('Tambah',$data);
	}

	function prosesTambah()
	{
		$this->load->model('koneksi');
		$eksekusi =  $this->koneksi->Tambah_Data_Film ($_POST);
		if ($eksekusi) {
			# code...
			echo "SUKSES";
		}
		else{
			echo "GAGAL";
		}
	echo '
	<script type="text/javascript">
	alert("Tambah Data '.$hasil. ' ");
	location = "../";
	</script>
	';
	}
}
?>