<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar_ulang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_ulang_model');
		$this->load->model('tamu_model');
		$this->load->model('mahasiswa_model');
	}

	public function page_du_pagi()
	{
			$id_pendaftaran = $this->uri->segment(3);
			$data['du_pagi'] = $this->daftar_ulang_model->page_du_pagi($id_pendaftaran);
			$data['kodeunik'] = $this->daftar_ulang_model->buat_kode();
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPreschool'] = $this->daftar_ulang_model->getPreschool();
			$data['main_view'] = 'Daftar/daftarulang_pagi_view';
			$this->load->view('template', $data);
	}

	public function save_mahasiswa_pagi()
	{
			if($this->mahasiswa_model->save_mahasiswa_pagi() == TRUE && $this->mahasiswa_model->save_ayah() == TRUE  && $this->mahasiswa_model->save_ibu() == TRUE && $this->mahasiswa_model->save_alamat() == TRUE && $this->mahasiswa_model->save_wali() == TRUE && $this->mahasiswa_model->save_kependudukan() == TRUE && $this->mahasiswa_model->save_jenis_tinggal() == TRUE && $this->mahasiswa_model->save_bio() == TRUE && $this->mahasiswa_model->save_kontak() == TRUE && $this->mahasiswa_model->save_tgl_du() == TRUE){
				$id_du = $this->input->post('id_mahasiswa');
				$this->tamu_model->save_update_status2($id_du);
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('daftar_ulang/data_peserta_tes');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data  '.$nama_pendaftar.' Sudah Ada </div>');
            	redirect('daftar_ulang/page_du_pagi');
			} 
	} 

	public function page_du_sore()
	{
			$id_pendaftaran = $this->uri->segment(3);
			$data['du_pagi'] = $this->daftar_ulang_model->page_du_pagi($id_pendaftaran);
			$data['kodeunik'] = $this->daftar_ulang_model->buat_kode();
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPreschool'] = $this->daftar_ulang_model->getPreschool();
			$data['main_view'] = 'Daftar/daftarulang_sore_view';
			$this->load->view('template', $data);
	}

	public function save_mahasiswa_sore()
	{
			if($this->mahasiswa_model->save_mahasiswa_sore() == TRUE && $this->mahasiswa_model->save_ayah() == TRUE  && $this->mahasiswa_model->save_ibu() == TRUE && $this->mahasiswa_model->save_alamat() == TRUE && $this->mahasiswa_model->save_wali() == TRUE && $this->mahasiswa_model->save_kependudukan() == TRUE && $this->mahasiswa_model->save_jenis_tinggal() == TRUE && $this->mahasiswa_model->save_bio() == TRUE && $this->mahasiswa_model->save_kontak() == TRUE && $this->mahasiswa_model->save_tgl_du() == TRUE && $this->mahasiswa_model->save_tes_sore() == TRUE){
				$id_du = $this->input->post('id_mahasiswa');
				$this->tamu_model->save_update_status2($id_du);
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Data  '.$nama_pendaftar.' Sudah Ada </div>');
            	redirect('daftar_ulang/page_du_pagi');
			} 
	} 

	public function data_peserta_tes()
	{
			$data['du'] = $this->daftar_ulang_model->data_peserta_tes();
			$data['main_view'] = 'Daftar/data_daftarulang_view';
			$this->load->view('template', $data);
	}

	public function detail_nilai()
	{
			$id_du = $this->uri->segment(3);
			$data['edit'] = $this->daftar_ulang_model->detail_nilai($id_du);
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPreschool'] = $this->daftar_ulang_model->getPreschool();
			$data['main_view'] = 'Tes/detail_hasil_tes_view';
			$this->load->view('template', $data);
	}

	public function print_ljk(){
        
        $id_mahasiswa= $this->uri->segment(3);
        $data['edit'] = $this->daftar_ulang_model->get_du_by_id($id_mahasiswa);
        $data['main_view'] = 'tes_backup';
        $this->load->view('template', $data);
   }

	public function get_concentrate($param = NULL) {
		// $layanan =$this->input->post('layanan');
		$prodi = $param;
		$result = $this->daftar_ulang_model->get_concentrate($prodi);
		$option = "";
		$option .= '<option value="">Pilih Konsentrasi</option>';
		foreach ($result as $data) {
			$option .= "<option value='".$data->id_konsentrasi."' >".$data->nama_konsentrasi."</option>";
		}
		echo $option;

	}
	public function cek_nim(){
		$nim = $this->input->post('nim');
		$this->daftar_ulang_model->cek_nim($nim);
	}

	 public function save_edit_du()
      {
		 $id_mahasiswa = $this->uri->segment(3);
			if($this->mahasiswa_model->save_edit_mahasiswa($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_ayah($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_bio($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_alamat($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_wali($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_kependudukan($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_jenis_tinggal($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_kontak($id_mahasiswa) == TRUE && $this->mahasiswa_model->save_edit_ibu($id_mahasiswa) == TRUE){
				$nama_du = $this->input->post('nama_mahasiswa');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_du.' berhasil didaftarkan. </div>');
            	redirect('mahasiswa');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Gagal </div>');
            	redirect('mahasiswa/data_mahasiswa');
			} 
	} 
}