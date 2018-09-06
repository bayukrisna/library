<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('informasi_model');
	}

	public function index(){
		if ($this->session->userdata('logged_in') == TRUE) {
				$data['getJabatan'] = $this->informasi_model->getJabatan();
				$data['informasi'] = $this->informasi_model->data_informasi();
				$data['main_view'] = 'Informasi/informasi_view';
				$this->load->view('template', $data);
			} else {
			redirect('login');
		}
	}

	public function simpan_informasi()
	{
			if($this->informasi_model->simpan_informasi() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data informasi berhasil ditambah </div>');
            	redirect('informasi');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data informasi gagal ditambah </div>');
            	redirect('informasi');
		}
	}

	public function simpan_informasi2()
	{
			if($this->informasi_model->simpan_informasi() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data informasi berhasil ditambah </div>');
            	redirect('informasi/saring_level/'.$this->session->userdata('level'));
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data informasi gagal ditambah </div>');
            	redirect('informasi/saring_level/'.$this->session->userdata('level'));
		}
	}

	public function hapus_informasi(){
		$id_informasi = $this->uri->segment(3);
		if ($this->informasi_model->hapus_informasi($id_informasi) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Data informasi berhasil dihapus </div>');
			redirect('informasi');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data informasi gagal dihapus </div>');
			redirect('informasi');
		}
	}


	public function edit_informasi(){
			$id_informasi = $this->input->post('id_info');
					if ($this->informasi_model->edit_informasi($id_informasi) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Data informasi berhasil diedit </div>');
						redirect('informasi');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Data informasi gagal diedit </div>');
						redirect('informasi');
					}
			}

	public function filter_informasi()
	{
			$data['getJabatan'] = $this->informasi_model->getJabatan();
			$id_level=$this->input->get('id_level');
			$data['informasi'] = $this->informasi_model->filter_informasi($id_level);
			$data['main_view'] = 'Informasi/informasi_view';
			$this->load->view('template', $data);
	}

	public function saring_level()
	{
			$id_level= $this->uri->segment(3);
			$data['getJabatan'] = $this->informasi_model->getJabatan();
			$data['informasi'] = $this->informasi_model->filter_informasi2($id_level);
			$data['main_view'] = 'Informasi/informasi_view';
			$this->load->view('template', $data);
	}
		


}

/* End of file master_konsentrasi.php */
/* Location: ./application/controllers/master_konsentrasi.php */