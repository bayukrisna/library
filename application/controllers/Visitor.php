<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
		$this->load->model('Visitor_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}
	
	public function index()
	{
		$data['visitor'] = $this->db->order_by('visitorDate', 'desc')->join('campus', 'campus.campusId = visitor.campusId')->get('visitor')->result();
		$data['getCampus'] = $this->Master_model->getCampus();
		$data['main_view'] = 'Visitor/visitor_view';
		$this->load->view('template', $data);
	}
	public function add_visitor(){
		if($this->Visitor_model->add_visitor() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Visitor');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Visitor');
		}
	}
	public function delete_visitor($id){
		if ($this->db->where('visitorNo', $id)->delete('visitor') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Visitor');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Visitor');
		}
	}
	public function edit_visitor(){
		if($this->Visitor_model->edit_visitor() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Visitor');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Visitor');
		}
	}
}