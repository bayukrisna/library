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

	public function edit_kategori()
	{
		$id_kategori = $this->input->post('id_kategori');
			if($this->Kategori_model->edit_kategori($id_kategori) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Kategori Berhasil Diubah </div>');
            	redirect('kategori');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('kategori');
		}
	}

	public function hapus_kategori(){
		$id_kategori = $this->uri->segment(3);
		if ($this->Kategori_model->hapus_kategori($id_kategori) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Kategori berhasil dihapus </div>');
			redirect('kategori');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Kategori gagal dihapus </div>');
			redirect('kategori');
		}
	}
}