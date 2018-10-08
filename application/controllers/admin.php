<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
				$data['user'] = $this->User_model->data_user();
				$data['main_view'] = 'Admin/user_view';
				$this->load->view('template', $data);
		} else {
			redirect('login');
		}
			
	}

	public function user_login()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
				$data['user'] = $this->User_model->data_user_login();
				$data['main_view'] = 'Admin/user_login_view';
				$this->load->view('template', $data);
		} else {
			redirect('login');
		}
			
	}

	public function signup()
	{
			if($this->User_model->signup() == TRUE){
				$username = $this->input->post('username');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> User '.$username.' berhasil ditambahkan </div>');
            	redirect('admin');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Username/password sudah ada. </div>');
            	redirect('admin');
			} 
	} 
	public function calendar(){
        
    }
}