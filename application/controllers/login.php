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
			$this->load->view('login_view');
	}

	public function login()
	{
		if($this->user_model->masuk() == TRUE){
			if($this->session->userdata('level') == 5){
				redirect(base_url('mahasiswa'));
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