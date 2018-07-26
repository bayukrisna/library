<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mata_kuliah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_ulang_model');
		$this->load->model('mata_kuliah_model');
	}

	public function index()
	{
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getJenisMatkul'] = $this->daftar_ulang_model->getJenisMatkul();
			$data['matkul'] = $this->mata_kuliah_model->data_matkul();
			$data['main_view'] = 'Mata_kuliah/mata_kuliah_view';
			$this->load->view('template', $data);
		
	}
	public function tambah_matkul()
	{
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'Mata_kuliah/tambah_matkul_view';
			$this->load->view('template', $data);
		
	}

	public function detail_matkul()
	{
			$kode_matkul = $this->uri->segment(3);
			$data['matkul'] = $this->mata_kuliah_model->detail_matkul($kode_matkul);
			$data['getJenisMatkul'] = $this->daftar_ulang_model->getJenisMatkul();
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'Mata_kuliah/detail_matkul_view';
			$this->load->view('template', $data);
	}

	public function simpan_matkul()
	{
			if($this->mata_kuliah_model->simpan_matkul() == TRUE){
				$prodi = $this->input->post('nama_matkul');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Registrasi '.$prodi.' berhasil didaftarkan. </div>');
            	redirect('mata_kuliah');
			
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('mata_kuliah');
		}
	}
	public function edit_matkul(){
			$id_periode = $this->input->post('kode_matkul');
					if ($this->mata_kuliah_model->edit_matkul($id_periode) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$id_periode.' berhasil . </div>');
            			redirect('mata_kuliah');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$id_periode.' gagal . </div>');
            			redirect('mata_kuliah');
					}
		}
}