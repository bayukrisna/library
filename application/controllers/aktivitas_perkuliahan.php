<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivitas_perkuliahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('aktivitas_perkuliahan_model');
		$this->load->model('daftar_ulang_model');
		$this->load->model('mahasiswa_model');
	}

	public function index()
	{
			$data['aktivitas'] = $this->aktivitas_perkuliahan_model->data_aktivitas_perkuliahan();
			$data['main_view'] = 'aktivitas_perkuliahan/aktivitas_perkuliahan_view';
			$this->load->view('template', $data);
	}

	public function cek_duplikat(){
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$id_periode = $this->input->post('id_periode');
		$this->aktivitas_perkuliahan_model->cek_duplikat($id_mahasiswa, $id_periode);
	}
	

	public function filter_ap()
	{
			$id_mahasiswa = $this->input->get('id_mahasiswa');
			$id_periode = $this->input->get('id_periode');
			$data['nilai'] = $this->aktivitas_perkuliahan_model->filter_ap($id_mahasiswa,$id_periode);
			$data['nilai2'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['main_view'] = 'aktivitas_perkuliahan/aktivitas_perkuliahan_view2';
			$this->load->view('template', $data);
	}


	public function save_ap()
	{
		$id_mahasiswa = $this->input->post('id_mahasiswa');
		$ipk = $this->input->post('ipk_ak');
		$id_grade = $this->input->post('id_grade');
			if($this->aktivitas_perkuliahan_model->save_ap() == TRUE && $this->aktivitas_perkuliahan_model->update_status($id_mahasiswa) == TRUE && $this->mahasiswa_model->update_ipk($id_mahasiswa, $ipk) == TRUE && $this->mahasiswa_model->update_grade($id_mahasiswa, $id_grade) == TRUE){
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data aktivitas perkuliahan berhasil ditambahkan </div>');
            	redirect('aktivitas_perkuliahan');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data aktivitas perkuliahan gagal ditambahkan </div>');
            	redirect('aktivitas_perkuliahan');
			} 
	}
		
}