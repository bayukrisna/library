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
		$data['catalogue'] = $this->db->join('catalogue_group', 'catalogue_group.cgId = detail_catalogue_group.cgId')->get('detail_catalogue_group')->result();
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
	//===================================================================================\\
	//===================================================================================\\
	public function vendor(){
		$data['vendor'] = $this->Master_model->getVendor();
		$data['main_view'] = 'Master/vendor_view';
		$this->load->view('template', $data);
	}
	public function add_vendor(){
		if($this->Master_model->add_vendor() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/vendor');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/vendor');
		}
	}
	public function delete_vendor($id){
		if ($this->db->where('id_vendor', $id)->delete('vendor') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/vendor');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/vendor');
		}
	}
	public function edit_vendor(){
		if($this->Master_model->edit_vendor() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/vendor');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/vendor');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function status(){
		$data['status'] = $this->Master_model->getStatus();
		$data['main_view'] = 'Master/status_view';
		$this->load->view('template', $data);
	}
	public function add_status(){
		if($this->Master_model->add_status() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/status');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/status');
		}
	}
	public function delete_status($id){
		if ($this->db->where('statusId', $id)->delete('status') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/status');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/status');
		}
	}
	public function edit_status(){
		if($this->Master_model->edit_status() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/status');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/status');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function campus(){
		$data['campus'] = $this->Master_model->getCampus();
		$data['main_view'] = 'Master/campus_view';
		$this->load->view('template', $data);
	}
	public function add_campus(){
		if($this->Master_model->add_campus() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/campus');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/campus');
		}
	}
	public function delete_campus($id){
		if ($this->db->where('campusId', $id)->delete('campus') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/campus');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/campus');
		}
	}
	public function edit_campus(){
		if($this->Master_model->edit_campus() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/campus');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/campus');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function key(){
		$data['getStatus'] = $this->Master_model->getStatus();
		$data['getCampus'] = $this->Master_model->getCampus();
		$data['key'] = $this->Master_model->getKey();
		$data['main_view'] = 'Master/key_view';
		$this->load->view('template', $data);
	}
	public function add_key(){
		if($this->Master_model->add_key() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/key');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/key');
		}
	}
	public function delete_key($id){
		if ($this->db->where('id_key', $id)->delete('key') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/key');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/key');
		}
	}
	public function edit_key(){
		if($this->Master_model->edit_key() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/key');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/key');
		}
	}
	//===================================================================================\\
	//===================================================================================\\
	public function member(){
		$data['member'] = $this->Master_model->getMember();
		$data['getUserStatus'] = $this->Master_model->getUserStatus();
		$data['getCampus'] = $this->Master_model->getCampus();
		$data['main_view'] = 'Master/member_view';
		$this->load->view('template', $data);
	}
	public function member_edit($id){
		$data['member'] = $this->db->where('userId', $id)->join('user_category', 'user_category.ucId=user.ucId')->get('user')->row();
		$data['getUserStatus'] = $this->Master_model->getUserStatus();
		$data['getUC'] = $this->Master_model->get_uc_by_us($data['member']->usId);
		$data['getCampus'] = $this->Master_model->getCampus();
		$data['main_view'] = 'Master/Member/member_edit_view';
		$this->load->view('template', $data);
	}
	public function add_member(){
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
		if($this->Master_model->add_member($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/member');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/member');
		}
	}
	public function delete_member($id){
		if ($this->db->where('userId', $id)->delete('user') == TRUE) {
			$this->session->set_flashdata('message', ' <div class="alert alert-success"> Deleted </div>');
			redirect('Master/member');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
			redirect('Master/member');
		}
	}
	public function edit_member(){
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
		if($this->Master_model->edit_member($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Master/member');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Master/member');
		}
	}
	public function get_uc_by_us($param = NULL) {
		$usId = $param;
		$result = $this->Master_model->get_uc_by_us($usId);
		$option = "";
		$option .= '<option value=""> Choose Cathegory </option>';
		foreach ($result as $data) {
			$option .= "<option value='".$data->ucId."' >".$data->ucCategory."</option>";
		}
		echo $option;

	}
}