<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('laporan_model');
	}

	public function index()
	{
		$data['main_view'] = 'Laporan/laporan_tamu_view';
		$this->load->view('template', $data);
	}

	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_tamu(){
		$data['main_view'] = 'Laporan/laporan_tamu_view';
		$this->load->view('template', $data);	
	}
	public function laporan_tamuku(){
    $tanggal_pendaftaran = $this->input->get('tanggal_pendaftaran');
    $tanggal_pendaftaran2 = $this->input->get('tanggal_pendaftaran2');
    $this->laporan_model->laporan_tamu($tanggal_pendaftaran, $tanggal_pendaftaran2);
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_mahasiswa(){
		$data['main_view'] = 'Laporan/laporan_mahasiswa_view';
		$data['getPeriode'] = $this->laporan_model->getPeriode();
		$data['getProdi'] = $this->laporan_model->getProdi();
		$this->load->view('template', $data);	
	}
	public function laporan_mahasiswaku(){
    $id_periode = $this->input->get('id_periode');
    $id_prodi = $this->input->get('id_prodi');
    $this->laporan_model->laporan_mahasiswa($id_periode, $id_prodi);
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_peserta_tes(){
  		$data['getTahun'] = $this->laporan_model->getTahun();
		$data['main_view'] = 'Laporan/laporan_peserta_tes_view';
		$this->load->view('template', $data);	
	}
	public function laporan_peserta_tesku(){
    $tanggal_hasil_tes = $this->input->get('tanggal_hasil_tes');
    $this->laporan_model->laporan_peserta_tes($tanggal_hasil_tes);
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_data_getstudent(){
  		$data['getTahunSgs'] = $this->laporan_model->getTahunSgs();
		$data['main_view'] = 'Laporan/laporan_data_getstudent_view';
		$this->load->view('template', $data);	
	}
	public function laporan_data_getstudentku(){
    $tanggal_konfirmasi = $this->input->get('tanggal_konfirmasi');
    $this->laporan_model->laporan_data_getstudent($tanggal_konfirmasi);
  	}
}


