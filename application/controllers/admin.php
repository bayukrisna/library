<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if ($this->session->userdata('logged_in') == TRUE) {
			if($this->session->userdata('level') == 1){
				$data['dropdown_level'] = $this->user_model->dropdown_level();
				$data['data_user'] = $this->user_model->data_user();
				$data['main_view'] = 'Admin/tambah_user_view';
				$this->load->view('template', $data);
			} else {
				redirect(base_url('login'));
			}
		} else {
			redirect('login');
		}
			
	}
	public function tambah_user()
	{
		$data['main_view'] = 'tambah_user_view';
		$this->load->view('template', $data);
			
	}

	public function signup()
	{
			if($this->user_model->signup() == TRUE){
				$username = $this->input->post('username');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Registrasi '.$username.' berhasil didaftarkan. </div>');
            	redirect('admin');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Username/password sudah ada. </div>');
            	redirect('admin');
			} 
	} 
	public function calendar(){
        
    }
}