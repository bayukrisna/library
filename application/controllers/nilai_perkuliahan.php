<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_perkuliahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_perkuliahan_model');
		$this->load->model('daftar_ulang_model');
		$this->load->model('finance_model');
		$this->load->model('nilai_perkuliahan_model');
	}


	public function index(){
				$data['getProdi'] = $this->daftar_ulang_model->getProdi();
				$data['getPeriode'] = $this->daftar_ulang_model->getPeriode();
				$data['kp'] = $this->kelas_perkuliahan_model->data_kp();
				$data['main_view'] = 'Nilai_perkuliahan/nilai_perkuliahan_view';
				$this->load->view('template', $data);
	}

	public function filter_kp()
	{
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPeriode'] = $this->daftar_ulang_model->getPeriode();
			$id_prodi=$this->input->get('id_prodi');
			$id_periode=$this->input->get('id_periode');
			$data['kp'] = $this->kelas_perkuliahan_model->filter_kp($id_prodi,$id_periode);
			$data['main_view'] = 'Nilai_perkuliahan/nilai_perkuliahan_view';
			$this->load->view('template', $data);
	}

	public function get_skala() {
		
		$nilai = $this->input->post('nilai');
		$id_prodi = $this->input->post('id_prodi');
	    $this->nilai_perkuliahan_model->get_skala($nilai, $id_prodi);	
	}

	public function detail_nilai(){
				$id_kp = $this->uri->segment(3);
				$data['kp'] = $this->nilai_perkuliahan_model->detail_nilai($id_kp);
				$data['nilai'] = $this->nilai_perkuliahan_model->data_nilai($id_kp);
				$data['main_view'] = 'Nilai_perkuliahan/detail_nilai_perkuliahan_view';
				$this->load->view('template', $data);
	}

	public function edit_nilai(){
				$id_kp = $this->uri->segment(3);
				$data['dnilai'] = $this->nilai_perkuliahan_model->edit_nilai($id_kp);
				$data['skala'] = $this->nilai_perkuliahan_model->data_skala_nilai();
				$data['main_view'] = 'Nilai_perkuliahan/input_nilai_view';
				$this->load->view('template', $data);
	}

	public function save_edit_nilai(){
			$id_kelas_mhs = $this->uri->segment(3);

					if ($this->nilai_perkuliahan_model->save_edit_nilai($id_kelas_mhs) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit Mahasiswa berhasil </div>');
            			$id_kp = $this->input->post('id_kp');
            			redirect('nilai_perkuliahan/detail_nilai/'.$id_kp);
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit Mahasiswa Gagal </div>');
            			redirect('kelas_perkuliahan');
					}
		}



}

/* End of file kelas_perkuliahan.php */
/* Location: ./application/controllers/kelas_perkuliahan.php */