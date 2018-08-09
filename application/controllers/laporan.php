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
		$this->load->view('template', $data);	
	}
	public function laporan_mahasiswaku(){
    $tanggal_pendaftaran = $this->input->get('tanggal_pendaftaran');
    $tanggal_pendaftaran2 = $this->input->get('tanggal_pendaftaran2');
    $this->laporan_model->laporan_tamu($tanggal_pendaftaran, $tanggal_pendaftaran2);
  	}
  	/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}


