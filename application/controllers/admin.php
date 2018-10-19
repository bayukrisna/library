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
	
	public function user()
	{
				$data['user'] = $this->User_model->data_user();
				$data['main_view'] = 'Admin/user_view';
				$this->load->view('template', $data);
	}

	public function detail_user()
	{
				$id_user = $this->uri->segment(3);
				$data['user'] = $this->User_model->detail_user($id_user);
				$data['getUserStatus'] = $this->User_model->getUserStatus();
				$data['main_view'] = 'Admin/detail_user_view';
				$this->load->view('template', $data);
	}

	public function get_category_by_status($param = NULL){
		$id_us = $param;
		$result = $this->User_model->get_category_by_status($id_us);
		$option = "";
		
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_uc."'>".$data->category."</option>";
			
		}
		echo $option;
	}

	public function edit_user()
	{
		$id_user = $this->uri->segment(3);
			if($this->User_model->edit_user($id_user) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> User Edited </div>');
            	redirect('admin/detail_user/'.$id_user);
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Username/password sudah ada. </div>');
            	redirect('admin/detail_user/'.$id_user);
			} 
	} 
}