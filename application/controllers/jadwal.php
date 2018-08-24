<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('jadwal_model');
		$this->load->model('daftar_ulang_model');
	}

	public function index()
	{
			$data['jadwal'] = $this->jadwal_model->data_jadwal();
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'jadwal/jadwal_view';
			$this->load->view('template', $data);
	}

	public function detail_jadwal()
	{
			$id_jadwal = $this->uri->segment(3);
			$data['jadwal'] = $this->jadwal_model->detail_jadwal($id_jadwal);
			$data['main_view'] = 'jadwal/edit_jadwal_view';
			$this->load->view('template', $data);
	}

	public function cek_duplikat(){
		$id_kp = $this->input->post('id_kp');
		$jam_awal = $this->input->post('jam_awal');
		$jam_akhir = $this->input->post('jam_akhir');
		$id_hari = $this->input->post('id_hari');
		$this->jadwal_model->cek_duplikat($id_kp, $jam_awal,$jam_akhir, $id_hari);
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


	public function simpan_jadwal()
	{
			if($this->jadwal_model->simpan_jadwal() == TRUE){
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Jadwal berhasil ditambahkan </div>');
            	redirect('jadwal');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Jadwal gagal ditambahkan </div>');
            	redirect('jadwal');
			} 
	}

	public function edit_jadwal()
	{
		$id_jadwal = $this->uri->segment(3);
			if($this->jadwal_model->edit_jadwal($id_jadwal) == TRUE){
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Jadwal berhasil diubah </div>');
            	redirect('jadwal');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Jadwal gagal diubah </div>');
            	redirect('jadwal');
			} 
	}

	public function get_autocomplete_kp(){
		if(isset($_GET['term'])){
			$result = $this->jadwal_model->autocomplete_kp($_GET['term']);
			if(count($result) > 0){
				foreach ($result as $row) 
					$result_array[] = array(
						'label' => $row->nama_kelas.' - '.$row->nama_matkul.' - '.$row->nama_prodi,
						'id_prodi' => $row->id_prodi,
						'id' => $row->id_kp);
				echo json_encode($result_array);
			
			}
		}
	}
	public function hapus_jadwal($id_prodi){
		$id_jadwal = $this->uri->segment(3);
		if ($this->jadwal_model->hapus_jadwal($id_jadwal) == TRUE) {
			$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Jadwal berhasil dihapus </div>');
			redirect('jadwal');
		} else {
			$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Jadwal gagal ditambahkan </div>');
			redirect('jadwal');
		}
	}

	public function jadwal_mhs()
	{
			$id_mahasiswa = $this->uri->segment(3);
			$data['jadwal'] = $this->jadwal_model->jadwal_mhs($id_mahasiswa);
			$data['mahasiswa'] = $this->mahasiswa_model->detail_krs_mahasiswa($id_mahasiswa);
			$data['main_view'] = 'jadwal/edit_jadwal_view';
			$this->load->view('template', $data);
	}
		
}