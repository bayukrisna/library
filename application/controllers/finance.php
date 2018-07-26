<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('finance_model');
	}

	public function dashboard_finance(){
		$data['dashboard'] = $this->finance_model->dashboard();
		$data['main_view'] = 'Finance/dashboard_finance_view';
		$this->load->view('template', $data);

	}

		public function index()
	{
		$data['main_view'] = 'Finance/finance_view';
		$data['data']=$this->finance_model->data_mahasiswa();
		$this->load->view('template', $data);
	}
	public function pembayaran()
	{

		$id_mahasiswa = $this->input->get('id_mahasiswa');
		$data['nama'] = $this->input->get('nama_mhs');
		$data['riwayat'] = $this->finance_model->riwayat_pembayaran($id_mahasiswa);
		$data['main_view'] = 'Finance/pembayaran_view';
		$this->load->view('template', $data);
	}
	public function oke()
	{
		$this->load->view('Finance/pembayaran_view');
	}
	function autocomplete(){
		$searchTerm = $_GET['term'];
		//mendapatkan data yang sesuai dari tabel daftar_kota
		$query = $this->db->query("SELECT * FROM tb_biaya WHERE nama_biaya LIKE '%".$searchTerm."%' ORDER BY nama_biaya ASC");
		foreach($query->result_array() as $row){
		    $data[] = $row['nama_biaya'];
		    $data[] = $row['id_biaya'];
		}
		//return data json
		echo json_encode($data);
	}
	public function get_autocomplete(){
		if(isset($_GET['term'])){
			$result = $this->finance_model->autocomplete($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->nama_mahasiswa,
						'id' => $row->id_mahasiswa);
				echo json_encode($result_array);
			
			}
		}
	}



	public function data_lunas()
	{
		$data['main_view'] = 'Finance/data_lunas_view';
		$data['mahasiswa'] = $this->finance_model->data_lunas();
		$this->load->view('template', $data);
	}

	public function konfirmasi(){				
				$id_pendaftaran = $this->input->post('id_pendaftaran');
				if ($this->input->post('reg') == 'No Registrasi Tersedia'){
					if ($this->finance_model->save_konfirmasi($id_pendaftaran) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> konfirmasi Berhasil </div>');
						redirect('finance');
					} else  {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');
					} 	
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');}
		}
	public function konfirmasi_gagal($id_pendaftaran){				
				$id_pendaftaran = $this->uri->segment(3);
				if ($this->finance_model->gagal_konfirmasi($id_pendaftaran) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Data tidak valid </div>');
						redirect('finance');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');
					}
			}
	public function cek_id_daftar_ulang(){
		$id = $this->input->post('id_daftar_ulang');
		$this->finance_model->cek_id_daftar_ulang($id);
	}
}
