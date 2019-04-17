<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaction_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}
	
	public function index()
	{
		
		
	}
	public function history(){
		$id_user = $this->session->userdata('userId');
		$data['book'] = $this->Transaction_model->data_book_user($id_user);
		$data['main_view'] = 'Student/history_view';
		$this->load->view('template', $data);
	}
	public function list_request(){
		$id_user = $this->session->userdata('userId');
		$data['data'] = $this->db->where('userId', $id_user)
								->join('document', 'document.docId = student_request.docId')
								->get('student_request')->result();
		$data['main_view'] = 'Student/request_view';
		$this->load->view('template', $data);
	}
	public function add_request(){
		$data = array(
            'userId'                        => $this->input->post('userId'),
            'docId'                        => $this->input->post('docId'),
            'srDate'                        => date('Y-m-d'),
            'srStatus'                        => '1'
        );
    
        $this->db->insert('student_request', $data);

        if($this->db->affected_rows() > 0){
            
            $this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div><br>');
            	redirect(base_url('Dashboard/detail_catalogue/'.$data['docId']));
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div><br>');
            redirect(base_url('Dashboard/detail_catalogue/'.$data['docId']));
            
        }
	}
}