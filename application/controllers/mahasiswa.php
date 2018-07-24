<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('mahasiswa_model');
		$this->load->model('daftar_ulang_model');
		$this->load->model('konsentrasi_model');
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
		$data['kodeunik'] = $this->mahasiswa_model->buat_kode();
			$id_du = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->get_mahasiswa_by_du($id_du);
			$data['main_view'] = 'Mahasiswa/detil_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function save_mahasiswa()
	{
			if($this->mahasiswa_model->save_mahasiswa() == TRUE && $this->mahasiswa_model->save_orang_tua() == TRUE && $this->mahasiswa_model->save_alamat() == TRUE && $this->mahasiswa_model->save_wali() == TRUE && $this->mahasiswa_model->save_kependudukan() == TRUE && $this->mahasiswa_model->save_jenis_tinggal() == TRUE){
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data  '.$nama_pendaftar.' Sudah Ada </div>');
            	redirect('daftar_ulang/page_du_pagi');
			} 
	} 

	public function data_mahasiswa()
	{
			$data['mahasiswa'] = $this->mahasiswa_model->data_mahasiswa_dikti();
			$data['drop_down_prodi'] = $this->konsentrasi_model->get_prodi();
			$data['main_view'] = 'Mahasiswa/mahasiswa_view';
			$this->load->view('template', $data);
	}
	public function get_filter() {
		
		$option = "";
			$option.='<p>kelas pagi</p>';
		echo $option;


	}

	public function filter_mahasiswa()
	{
			$data['drop_down_prodi'] = $this->konsentrasi_model->get_prodi();
			$id_prodi=$this->input->get('id_prodi');
			$agama=$this->input->get('agama');
			$jenis_kelamin=$this->input->get('jenis_kelamin');
			$angkatan=$this->input->get('tanggal_du');
			$data['mahasiswa'] = $this->mahasiswa_model->filter_mahasiswa($id_prodi,$agama,$jenis_kelamin,$angkatan);
			$data['main_view'] = 'Mahasiswa/mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function detail_mahasiswa_dikti()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_mahasiswa_dikti($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/detail_mahasiswa_dikti_view';
			$this->load->view('template', $data);
	}
	public function krs_mahasiswa()
	{
			$data['main_view'] = 'Mahasiswa/krs_mahasiswa_view';
			$this->load->view('template', $data);
	}
	public function history_nilai()
	{
			$data['main_view'] = 'Mahasiswa/history_nilai_view';
			$this->load->view('template', $data);
	}
	public function aktivasi_perkuliahan()
	{
			$data['main_view'] = 'Mahasiswa/aktivasi_perkuliahan_view';
			$this->load->view('template', $data);
	}
	public function prestasi()
	{
			$data['main_view'] = 'Mahasiswa/prestasi_view';
			$this->load->view('template', $data);
	}

	public function lihat_mahasiswa_dikti()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_mahasiswa_dikti($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/lihat_mahasiswa_dikti_view';
			$this->load->view('template', $data);
	}

	public function history_pendidikan()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_mahasiswa_dikti($id_mahasiswa);
			$history = $this->uri->segment(3);
			$data['history'] = $this->mahasiswa_model->history_pendidikan($history);
			$data['main_view'] = 'Mahasiswa/history_pendidikan_view';
			$this->load->view('template', $data);
	}

	public function save_edit_mahasiswa()
	{
		 $id_mahasiswa = $this->uri->segment(3);
			if($this->mahasiswa_model->save_edit_mahasiswa($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_orang_tua($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_alamat($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_wali($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_kependudukan($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_jenis_tinggal($id_mahasiswa) == TRUE){
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Gagal </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} 
	} 
		
}