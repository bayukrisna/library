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
  	public function laporan_mahasiswa(){
		$data['main_view'] = 'Laporan/laporan_mahasiswa_view';
		$data['getPeriode'] = $this->laporan_model->getPeriode();
		$data['getProdi'] = $this->laporan_model->getProdi();
		$this->load->view('template', $data);	
	}
	public function laporan_mahasiswaku(){
    $id_periode = $this->input->get('id_periode');
    $id_prodi = $this->input->get('id_prodi');
    $ea = $this->laporan_model->laporan_mahasiswa($id_periode, $id_prodi);
    print_r($ea);
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
  	public function laporan_data_getstudent(){
  		$data['getTahunSgs'] = $this->laporan_model->getTahunSgs();
		$data['main_view'] = 'Laporan/laporan_data_getstudent_view';
		$this->load->view('template', $data);	
	}
	public function laporan_data_getstudentku(){
    $tanggal_konfirmasi = $this->input->get('tanggal_konfirmasi');
    $this->laporan_model->laporan_data_getstudent($tanggal_konfirmasi);
  	}
  	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  	public function laporan_dmm(){
		$data['main_view'] = 'Laporan/laporan_dmm_view';
		$data['getSemester'] = $this->laporan_model->get_semester_dosen();
		$this->load->view('template', $data);	
	}
	public function laporan_dmm_dosen(){
	    $semester = $this->input->post('semester');
	    $id_dosen = $this->input->post('id_dosen');
	    $this->laporan_model->laporan_dmm_dosen($semester, $id_dosen);
  	}
  	public function laporan_dmm_mahasiswa(){
	    $semester = $this->input->post('semester');
	    $id_mahasiswa = $this->input->post('id_mahasiswa');
	    $this->laporan_model->laporan_dmm_mahasiswa($semester, $id_mahasiswa);
  	}
  	public function laporan_dmm_matkul(){
	    $semester = $this->input->post('semester');
	    $kode_matkul = $this->input->post('kode_matkul');
	    $this->laporan_model->laporan_dmm_matkul($semester, $kode_matkul);
  	}
  	public function get_autocomplete_dosen(){
		if(isset($_GET['term'])){
			$result = $this->laporan_model->autocomplete_dosen($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->id_dosen.' - '.$row->nama_dosen,
						'id' => $row->id_dosen);
				echo json_encode($result_array);
			
			}
		}
	}
	public function get_autocomplete_mahasiswa(){
		if(isset($_GET['term'])){
			$result = $this->laporan_model->autocomplete_mahasiswa($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->nim.' - '.$row->nama_mahasiswa,
						'id' => $row->id_mahasiswa);
				echo json_encode($result_array);
			
			}
		}
	}
	public function get_autocomplete_matkul(){
		if(isset($_GET['term'])){
			$result = $this->laporan_model->autocomplete_matkul($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->kode_matkul.' - '.$row->nama_matkul,
						'id' => $row->kode_matkul);
				echo json_encode($result_array);
			
			}
		}
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_khs(){
		$data['main_view'] = 'Laporan/laporan_khs_view';
		$data['getPeriode'] = $this->laporan_model->getPeriode();
		$this->load->view('template', $data);	
	}
	public function laporan_khsku(){
	    $id_mahasiswa = $this->input->get('id_mahasiswa');
	    $semester = $this->input->get('semester');
	    $this->laporan_model->laporan_khs($id_mahasiswa, $semester);
	}
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	public function laporan_transkrip(){
		$data['main_view'] = 'Laporan/laporan_transkrip_view';
		$this->load->view('template', $data);	
	}
	public function laporan_transkripku(){
	    $id_mahasiswa = $this->input->get('id_mahasiswa');
	    $this->laporan_model->laporan_transkrip($id_mahasiswa);
	}
}


