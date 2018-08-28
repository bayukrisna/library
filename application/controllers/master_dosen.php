<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_dosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dosen_model');
	}

	public function index()
	{
		$data['main_view'] = 'Dosen/master_dosen_view';
		$data['dosen'] = $this->dosen_model->data_dosen();
		$this->load->view('template', $data);
	}

	public function page_tambah_dosen(){
		$data['kd'] = $this->dosen_model->buat_kode_dosen();
		$data['main_view'] = 'Dosen/tambah_dosen_view';
		$this->load->view('template', $data);
	}

	public function save_dosen()
	{
			if($this->dosen_model->save_dosen() == TRUE){
				$dosen = $this->input->post('dosen');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data '.$nama_dosen.' berhasil ditambahkan. </div>');
            	redirect('master_dosen');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data '.$nama_dosen.' gagal ditambahkan. </div>');
            	redirect('master_dosen/page_tambah_dosen');
			} 
	} 


}

/* End of file master_dosen.php */
/* Location: ./application/controllers/master_dosen.php */