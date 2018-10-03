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

	/*public function edit_lahan(){
			$id_periode = $this->input->post('id_lahan');
					if ($this->ruang_model->edit_periode($id_periode) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$id_periode.' berhasil . </div>');
            			redirect('Lahan');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$id_periode.' gagal . </div>');
            			redirect('Lahan');
					}
		} */
}