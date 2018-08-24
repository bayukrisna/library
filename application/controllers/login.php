<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
			if($this->session->userdata('level') == 1){ //mahasiswa
				redirect(base_url('admin'));
			} else if($this->session->userdata('level') == 2){ // Dosen
				redirect(base_url('dosen'));
			} else if($this->session->userdata('level') == 3){ // Marketing
				redirect(base_url('tamu'));
			} else if($this->session->userdata('level') == 4){ // Finance
				redirect(base_url('finance/dashboard_finance'));
			} else if($this->session->userdata('level') == 5){ // Mahasiswa
				redirect(base_url('mahasiswa'));
			} else if($this->session->userdata('level') == 6){ // Akademik
				redirect(base_url('mahasiswa/data_mahasiswa'));
			} else {
				$this->load->view('login_view');
			}
			
	}

	public function login()
	{
		if($this->user_model->masuk() == TRUE){
			if($this->session->userdata('level') == 1){ //mahasiswa
				redirect(base_url('admin'));
			} else if($this->session->userdata('level') == 2){ // Dosen
				redirect(base_url('dosen'));
			} else if($this->session->userdata('level') == 3){ // Marketing
				redirect(base_url('tamu'));
			} else if($this->session->userdata('level') == 4){ // Finance
				redirect(base_url('finance/dashboard_finance'));
			} else if($this->session->userdata('level') == 5){ // Mahasiswa
				redirect(base_url('mahasiswa'));
			} else if($this->session->userdata('level') == 6){ // Akademik
				redirect(base_url('mahasiswa/data_mahasiswa'));
			} else {
				redirect(base_url('finance'));
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"><p> Login Gagal</p></div>');
			redirect('login');
		}
	}

	public function logout(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->session->sess_destroy();
			redirect('login');
		} else {
			redirect('login'); 
		}
	}
}