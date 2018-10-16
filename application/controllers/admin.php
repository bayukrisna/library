<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
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
	public function akses($id_user)
	{
		$data['cek'] = $this->db->where('id_user', $id_user)->get('tb_akses')->row();
		$data['main_view'] = 'Admin/akses_user_view';
		$this->load->view('template', $data);
			
	}
	public function kk(){
		$s = $this->db->select('MAX(id_user) as id_user')->from('tb_user')->get()->row();
        $kk = $s->id_user + 1;
        echo $kk;
	}

	public function update_akses()
	{
		$id_user = $this->uri->segment(3);
			if($this->User_model->update_akses($id_user) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data akses user berhasil diubah </div>');
            	redirect('admin/user_login');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Username/password sudah ada. </div>');
            	redirect('admin/user_login');
			} 
	} 
	public function calendar(){
        
    }
}