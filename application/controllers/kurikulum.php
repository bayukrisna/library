<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurikulum extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_ulang_model');
		$this->load->model('kurikulum_model');
	}

	public function index()
	{
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPeriode'] = $this->daftar_ulang_model->getPeriode();
			$data['kurikulum'] = $this->kurikulum_model->data_kurikulum();
			$data['main_view'] = 'kurikulum/kurikulum_view';
			$this->load->view('template', $data);
		
	}


	public function simpan_kurikulum()
	{
			if($this->kurikulum_model->simpan_kurikulum() == TRUE){
				$prodi = $this->input->post('nama_kurikulum');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Registrasi '.$prodi.' berhasil didaftarkan. </div>');
            	redirect('kurikulum');
			
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('kurikulum');
		}
	}

	/* public function detail_kurikulum()
	{
			$kode_kurikulum = $this->uri->segment(3);
			$data['kurikulum'] = $this->kurikulum_model->detail_kurikulum($kode_kurikulum);
			$data['getJeniskurikulum'] = $this->daftar_ulang_model->getJeniskurikulum();
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'kurikulum/detail_kurikulum_view';
			$this->load->view('template', $data);
	}

	public function edit_kurikulum(){
			$id_periode = $this->input->post('kode_kurikulum');
					if ($this->kurikulum_model->edit_kurikulum($id_periode) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$id_periode.' berhasil . </div>');
            			redirect('kurikulum');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$id_periode.' gagal . </div>');
            			redirect('kurikulum');
					}
		} */
}