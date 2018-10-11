<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merk extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Merk_model');
	}

	public function index()
	{
			$data['merk'] = $this->Merk_model->data_merk();
			$data['main_view'] = 'Merk/merk_view';
			$this->load->view('template', $data);
	}

	public function simpan_merk()
	{
			if($this->Merk_model->simpan_merk() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data merk berhasil disimpan </div>');
            	redirect('merk');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('merk');
		}
	}

	public function edit_merk()
	{
		$id_merk = $this->input->post('id_merk');
			if($this->Merk_model->edit_merk($id_merk) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Merk Berhasil Diubah </div>');
            	redirect('merk');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('merk');
		}
	}

	public function hapus_merk(){
		$id_merk = $this->uri->segment(3);
		if ($this->Merk_model->hapus_merk($id_merk) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Merk berhasil dihapus </div>');
			redirect('merk');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Merk gagal dihapus </div>');
			redirect('merk');
		}
	}
}