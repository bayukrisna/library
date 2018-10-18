<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Master_model');
	}
	public function index()
	{
			$data['getCG'] = $this->Master_model->getCG();
			$data['catalogue'] = $this->db->join('catalogue_group', 'catalogue_group.id_cg = detail_catalogue_group.id_cg')->get('detail_catalogue_group')->result();
			$data['main_view'] = 'Master/detail_catalogue_view';
			$this->load->view('template', $data);
	}
	
	public function catalogue(){
		$data['catalogue'] = $this->Master_model->getCG();
		$data['main_view'] = 'Master/catalogue_view';
		$this->load->view('template', $data);
	}
	public function add_catalogue(){
		if($this->Master_model->add_catalogue() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/catalogue');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/catalogue');
		}
	}
	public function delete_catalogue($id){
		if ($this->db->where('id_cg', $id)->delete('catalogue_group') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/catalogue');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/catalogue');
		}
	}
	public function edit_catalogue(){
		if($this->Master_model->edit_catalogue() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/catalogue');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/catalogue');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function detail_catalogue(){
		$data['getCG'] = $this->Master_model->getCG();
		$data['catalogue'] = $this->db->join('catalogue_group', 'catalogue_group.id_cg = detail_catalogue_group.id_cg')->get('detail_catalogue_group')->result();
		$data['main_view'] = 'Master/detail_catalogue_view';
		$this->load->view('template', $data);
	}
	public function add_detail_catalogue(){
		if($this->Master_model->add_detail_catalogue() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/detail_catalogue');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/detail_catalogue');
		}
	}
	public function delete_detail_catalogue($id){
		if ($this->db->where('id_dcg', $id)->delete('detail_catalogue_group') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/detail_catalogue');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/detail_catalogue');
		}
	}
	public function edit_detail_catalogue(){
		if($this->Master_model->edit_detail_catalogue() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/detail_catalogue');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/detail_catalogue');
		}
	}
}