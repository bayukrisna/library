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

	public function page_edit_dosen(){
		$id_dosen = $this->uri->segment(3);
		$data['dosen'] = $this->dosen_model->detail_dosen($id_dosen);
		$data['main_view'] = 'Dosen/edit_dosen_view';
		$this->load->view('template', $data);
	}

	public function detail_dosen(){
		$id_dosen = $this->uri->segment(3);
		$data['dosen'] = $this->dosen_model->detail_dosen($id_dosen);
		$data['main_view'] = 'Dosen/detail_dosen_view';
		$this->load->view('template', $data);
	}

	public function save_dosen()
	{
			if($this->dosen_model->save_dosen() == TRUE){
				$dosen = $this->input->post('nama_dosen');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data '.$nama_dosen.' berhasil ditambahkan. </div>');
            	redirect('master_dosen');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data '.$nama_dosen.' gagal ditambahkan. </div>');
            	redirect('master_dosen/page_tambah_dosen');
			} 
	} 

	public function edit_dosen()
	{
		$id_dosen = $this->uri->segment(3);
			if($this->dosen_model->edit_dosen($id_dosen) == TRUE){
				$dosen = $this->input->post('id_dosen');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data '.$nama_dosen.' berhasil ditambahkan. </div>');
            	redirect('master_dosen');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data '.$nama_dosen.' gagal ditambahkan. </div>');
            	redirect('master_dosen/edit_tambah_dosen/'.$id_dosen);
			} 
	} 

	public function jadwal_dosen(){
		$id_dosen = $this->uri->segment(3);
		$data['dosen'] = $this->dosen_model->detail_dosen($id_dosen);
		$data['senin'] = $this->dosen_model->jadwal_dosen_senin($id_dosen);
		$data['selasa'] = $this->dosen_model->jadwal_dosen_selasa($id_dosen);
		$data['rabu'] = $this->dosen_model->jadwal_dosen_rabu($id_dosen);
		$data['kamis'] = $this->dosen_model->jadwal_dosen_kamis($id_dosen);
		$data['jumat'] = $this->dosen_model->jadwal_dosen_jumat($id_dosen);
		$data['main_view'] = 'Dosen/jadwal_dosen_view';
		$this->load->view('template', $data);
	}


}

/* End of file master_dosen.php */
/* Location: ./application/controllers/master_dosen.php */