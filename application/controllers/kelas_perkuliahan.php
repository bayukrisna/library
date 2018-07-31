<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_perkuliahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kelas_perkuliahan_model');
		$this->load->model('daftar_ulang_model');
	}

	public function index(){
				$data['kp'] = $this->kelas_perkuliahan_model->data_kp();
				$data['main_view'] = 'Kelas_perkuliahan/kelas_perkuliahan_view';
				$this->load->view('template', $data);
	}

	public function save_kp()
	{
			if($this->kelas_perkuliahan_model->save_kp() == TRUE){
				$username = $this->input->post('nama_kp');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Registrasi '.$username.' berhasil didaftarkan. </div>');
            	redirect('kelas_perkuliahan');
			} 
	}

	public function hapus_kp($id_kp){
		if ($this->kelas_perkuliahan_model->hapus_kp($id_kp) == TRUE) {
			$this->session->set_flashdata('message', 'Hapus kp Berhasil');
			redirect('kelas_perkuliahan');
		} else {
			$this->session->set_flashdata('message', 'Hapus kp Berhasil');
			redirect('kelas_perkuliahan');
		}
	}

	public function save_edit_kp(){
			$id_kp = $this->uri->segment(3);
					if ($this->kelas_perkuliahan_model->save_edit_kp($id_kp) == TRUE) {
						$data['message'] = 'Edit kp berhasil';
						redirect('kelas_perkuliahan');
					} else {
						$data['main_view'] = 'Prodi/kelas_perkuliahan_view';
						$data['message'] = 'Edit kp gagal';
						redirect('kelas_perkuliahan/edit_kp');
					}
			}
}

/* End of file kelas_perkuliahan.php */
/* Location: ./application/controllers/kelas_perkuliahan.php */