<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Perusahaan_model');
	}

	public function index()
	{
			$data['perusahaan'] = $this->Perusahaan_model->data_perusahaan();
			$data['main_view'] = 'Perusahaan/perusahaan_view';
			$this->load->view('template', $data);
	}

	public function simpan_perusahaan()
	{
			if($this->Perusahaan_model->simpan_perusahaan() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Perusahaan berhasil disimpan </div>');
            	redirect('perusahaan');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('perusahaan');
		}
	}
	public function edit_perusahaan(){
			$id_perusahaan = $this->input->post('id_perusahaan');
			$nama_perusahaan = $this->input->post('nama_perusahaan');
					if ($this->Perusahaan_model->edit_perusahaan($id_perusahaan) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$nama_perusahaan.' berhasil . </div>');
            			redirect('perusahaan');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$nama_perusahaan.' gagal . </div>');
            			redirect('perusahaan');
					}
		} 
}