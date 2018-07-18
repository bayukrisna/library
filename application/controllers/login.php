<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function login()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('tamu');
		} else {
			$this->load->view('login_view');
		}
	}

	public function cek_login(){
		if ($this->session->userdata('logged_in') == TRUE) {
			redirect('tamu');
		} else {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE) {
				if ($this->login_model->ceklogin() == TRUE) {
					$this->session->set_flashdata('notif', 'Login Behasil');
					redirect('tamu');
				} else {
					$this->session->set_flashdata('notif', 'Login Gagal');
					redirect('login/login');
				}
			} else {
				$this->session->set_flashdata('notif', 'Nama atau PAssword salah');
				redirect('login/login');
			}
		} 
	}

	public function logout(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->session->sess_destroy();
			redirect('login/login');
		}
	}
	public function lupa(){
		$this->session->set_flashdata('message', '<div class="alert alert-danger"><p> Please Contact Admin</p></div>');
		redirect('login');
	}
}