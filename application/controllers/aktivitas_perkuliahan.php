<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aktivitas_perkuliahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('aktivitas_perkuliahan_model');
		$this->load->model('daftar_ulang_model');
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
			$data['nilai2'] = $this->aktivitas_perkuliahan_model->data_nilai_mhs($id_mahasiswa);
			$data['main_view'] = 'aktivitas_perkuliahan/aktivitas_perkuliahan_view2';
			$this->load->view('template', $data);
	}


	public function save_ap()
	{
			if($this->aktivitas_perkuliahan_model->save_ap() == TRUE){
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data aktivitas perkuliahan berhasil ditambahkan </div>');
            	redirect('aktivitas_perkuliahan');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data aktivitas perkuliahan gagal ditambahkan </div>');
            	redirect('aktivitas_perkuliahan');
			} 
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

	public function filter_nilai(){
			$id_mahasiswa = $this->uri->segment(3);
			$id_periode=$this->input->get('id_periode');
			$data['mahasiswa'] = $this->mahasiswa_model->detail_krs_mahasiswa($id_mahasiswa);
			$data['nilai'] = $this->mahasiswa_model->filter_nilai($id_mahasiswa,$id_periode);
			$data['nilai2'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/history_nilai_view';
			$this->load->view('template', $data);
	}
	public function filter_nilai_ak(){
			$id_mahasiswa = $this->input->get('id_mahasiswa');
			$id_periode=$this->input->get('id_periode');
    		$this->mahasiswa_model->filter_nilai_ak($id_mahasiswa, $id_periode);
  	
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
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_krs_mahasiswa($id_mahasiswa);
			$data['krs'] = $this->mahasiswa_model->data_krs_mhs($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/krs_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function history_nilai()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_krs_mahasiswa($id_mahasiswa);
			$data['nilai'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['nilai2'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/history_nilai_view';
			$this->load->view('template', $data);
	}

	public function aktivitas_perkuliahan()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_krs_mahasiswa($id_mahasiswa);
			$data['nilai'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['nilai2'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['main_view'] = 'aktivitas_perkuliahan/aktivitas_perkuliahan_view';
			$this->load->view('template', $data);
	}

	public function transkip_nilai()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$ipk = $this->uri->segment(4);
			$id_grade = $this->uri->segment(5);
			if($this->mahasiswa_model->update_ipk($id_mahasiswa, $ipk) == TRUE && $this->mahasiswa_model->update_grade($id_mahasiswa, $id_grade) ){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Update IPK Berhasil </div>');
            	redirect('mahasiswa/transkip_nilai2/'.$id_mahasiswa);
			} 	
	}

	public function transkip_nilai2()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_krs_mahasiswa($id_mahasiswa);
			$data['nilai2'] = $this->mahasiswa_model->data_nilai_mhs($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/transkip_nilai_view';
			$this->load->view('template', $data);
	}
	

	public function lihat_mahasiswa_dikti()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_mahasiswa_dikti($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/lihat_mahasiswa_dikti_view';
			$this->load->view('template', $data);
	}

	public function page_tambah_mahasiswa()
	{
			$data['kodeunik_mhs'] = $this->mahasiswa_model->buat_kode_mhs();
			$data['getStatus'] = $this->mahasiswa_model->getStatus();
			$data['getGrade'] = $this->mahasiswa_model->getGrade();
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'Mahasiswa/tambah_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function history_pendidikan()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_mahasiswa_dikti($id_mahasiswa);
			$history = $this->uri->segment(3);
			$data['history'] = $this->mahasiswa_model->history_pendidikan($history);
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'Mahasiswa/history_pendidikan_view';
			$this->load->view('template', $data);
	}

	public function simpan_pendidikan()
	{
		$id_mahasiswa = $this->uri->segment(3);
			if($this->mahasiswa_model->simpan_pendidikan($id_mahasiswa) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Tambah History Pendidikan Berhasil </div>');
            	redirect('mahasiswa/history_pendidikan/'.$id_mahasiswa);
			} 
	}

	public function prestasi()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_mahasiswa_dikti($id_mahasiswa);
			$data['prestasi'] = $this->mahasiswa_model->prestasi($id_mahasiswa);
			$data['main_view'] = 'Mahasiswa/prestasi_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function detail_prestasi()
	{
			$id_prestasi = $this->uri->segment(3);
			$data['prestasi'] = $this->mahasiswa_model->detail_prestasi($id_prestasi);
			$data['main_view'] = 'Mahasiswa/edit_prestasi_mahasiswa_view';
			$this->load->view('template', $data);
	}

	public function simpan_prestasi()
	{
		$id_mahasiswa = $this->uri->segment(3);
			if($this->mahasiswa_model->simpan_prestasi($id_mahasiswa) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Tambah Prestasi Berhasil </div>');
            	redirect('mahasiswa/prestasi/'.$id_mahasiswa);
			} 
	}

	public function edit_prestasi()
	{
		$id_prestasi = $this->uri->segment(3);
		$id_mahasiswa = $this->input->post('id_mahasiswa');
			if($this->mahasiswa_model->edit_prestasi($id_prestasi) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit Prestasi Berhasil </div>');
            	redirect('mahasiswa/prestasi/'.$id_mahasiswa);
			} 
	}

	public function save_edit_mahasiswa()
	{
		 $id_mahasiswa = $this->uri->segment(3);
			if($this->mahasiswa_model->save_edit_mahasiswa($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_ayah($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_ibu($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_alamat($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_wali($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_kependudukan($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_bio($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_jenis_tinggal($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_kontak($id_mahasiswa) == TRUE){
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Gagal </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} 
	} 

	public function save_mahasiswa()
	{
			if($this->mahasiswa_model->save_mahasiswa() == TRUE && $this->mahasiswa_model->save_ayah() == TRUE  && $this->mahasiswa_model->save_ibu() == TRUE && $this->mahasiswa_model->save_alamat() == TRUE && $this->mahasiswa_model->save_wali() == TRUE && $this->mahasiswa_model->save_kependudukan() == TRUE && $this->mahasiswa_model->save_bio() == TRUE && $this->mahasiswa_model->save_kontak() == TRUE && $this->mahasiswa_model->save_tgl_du_mhs() == TRUE){
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data  '.$nama_pendaftar.' Sudah Ada </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} 
	} 

	public function save_edit_foto_mahasiswa($foto_mahasiswa){
		$config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'jpg|png|jpeg';
	    $this->load->library('upload', $config);

	    $this->upload->do_upload($foto_mahasiswa);
	      $this->mahasiswa_model->save_edit_foto_mahasiswa($this->upload->data(), $this->uri->segment(3));
	}
		
}