<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('daftar_ulang_model');
	}

	public function index()
	{
			$data['mahasiswa'] = $this->mahasiswa_model->data_mahasiswa();
			$data['main_view'] = 'Mahasiswa/data_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function detail_mahasiswa()
	{
			$id_du = $this->uri->segment(3);
			$data['du'] = $this->daftar_ulang_model->detail_du($id_du);
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPreschool'] = $this->daftar_ulang_model->getPreschool();
			$data['main_view'] = 'Mahasiswa/detail_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function tambah_mahasiswa()
	{
			$id_du = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa_by_du($id_du);
			$data['main_view'] = 'Mahasiswa/tambah_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function save_mahasiswa()
	{
			if($this->mahasiswa_model->save_mahasiswa() == TRUE && $this->mahasiswa_model->save_orang_tua() == TRUE && $this->mahasiswa_model->save_alamat() == TRUE && $this->mahasiswa_model->save_wali() == TRUE && $this->mahasiswa_model->save_kependudukan() == TRUE){
				$id_pendaftaran = $this->input->post('id_du');
				$this->tamu_model->save_update_status2($id_pendaftaran);
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('daftar_ulang/data_du');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data  '.$nama_pendaftar.' Sudah Ada </div>');
            	redirect('daftar_ulang/page_du_pagi');
			} 
	} 
		
}