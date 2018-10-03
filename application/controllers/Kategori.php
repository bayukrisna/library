<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
	}

	public function index()
	{
			$data['kategori'] = $this->Kategori_model->data_ruang();
			$data['main_view'] = 'Kategori/kategori_view';
			$this->load->view('template', $data);
	}

	public function simpan_kategori()
	{
			if($this->Kategori_model->simpan_kategori() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data kategori berhasil disimpan </div>');
            	redirect('kategori');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('kategori');
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