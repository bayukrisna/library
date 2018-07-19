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

	public function data_lunas()
	{
		$data['main_view'] = 'Finance/data_lunas_view';
		$data['mahasiswa'] = $this->finance_model->data_lunas();
		$this->load->view('template', $data);
	}

	public function konfirmasi(){				
				$id_pendaftaran = $this->input->post('id_pendaftaran');
				if( $this->cek_id_daftar_ulang == TRUE){
					if ($this->finance_model->save_konfirmasi($id_pendaftaran) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> konfirmasi Berhasil </div>');
						redirect('finance');
					} else  {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Konfirmasi Gagal </div>');
						redirect('finance');
					} 	
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger"> No Registrasi sudah terdaftar  </div>');
						redirect('finance');
				}
				
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
