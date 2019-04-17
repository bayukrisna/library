<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}
	public function tags(){
		$array_string = "2011,2000";
		$array_like = explode(',', $array_string);
		foreach($array_like as $key => $value) {
		    $this->db->like('docTags', $value);
		}
		$a = $this->db->get('document')->result();
	}
	public function lpo(){
		$arrayName = array('sexId' => 1, 'sexName' => 'Males');
		$fields = $this->db->list_fields('sex');
		$cek = $this->db->where('sexId', '1')->get('sex')->result_array();
		foreach ($fields as $key) {
			if($arrayName[$key] == $cek[0][$key]){
				$a = 'sama';
			} else {
				$a = 'tidak sama';
			}
			echo $key.' - '.$a.'<br>';
		}
	}
	public function index()
	{
		if($this->session->userdata('group') != 'Admin'){
			$data['slider'] = $this->db->where('position', 'slider')->get('dashboard')->result();
			$data['banner'] = $this->db->where('position', 'banner')->get('dashboard')->result();

			$data['data'] = $this->db->limit(5)->order_by('docId', 'desc')->get('document')->result();
			$data['best'] = $this->db->select('tdId, transaction_detail.dnId, document.docId, docTitle, docImage, Count(1) as CNT')
									 ->join('document_number', 'document_number.dnId = transaction_detail.dnId')
									 ->join('document', 'document.docId = document_number.docId')
									 ->group_by('transaction_detail.dnId')
									 ->order_by('CNT','desc')
									 ->limit(5)
									 ->get('transaction_detail')
									 ->result();
			$data['main_view'] = 'Student/dashboard_view';
			$this->load->view('template', $data);	
		} else {
			$data['dashboard'] = $this->Dashboard_model->dashboard_admin();
			$data['main_view'] = 'dashboard_view';
			$this->load->view('template', $data);	
		}
		
	}
	public function detail_catalogue($docId){
		$data['document'] = $this->db->where('document.docId', $docId)->join('detail_catalogue_group', 'detail_catalogue_group.dcgId=document.dcgId')->join('catalogue_group', 'catalogue_group.cgId=detail_catalogue_group.cgId')->get('document')->row();
		$data['stock'] = $this->db->where('docId', $docId)->where('statusId', '1')->get('document_number')->num_rows();
		$data['main_view'] = 'Student/detail_catalogue_view';
		$this->load->view('template', $data);	
	}

	public function list_book(){
		$a = $this->input->get('p', true);
		$a = urldecode($a);
		$config['base_url'] = site_url('Dashboard/list_book/?p='.$a); //site url

        $config['total_rows'] = $this->db->like('docTitle', $a)->get('document')->num_rows(); //total row
        $config['per_page'] = 15;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = 2;

        // Membuat Style pagination untuk BootStrap v4
        $config['page_query_string'] = TRUE;
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
        $this->pagination->initialize($config);
        // $data['page'] = $this->uri->segment(3);
        $data['page'] = $this->input->get('per_page');

        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['data'] = $this->Dashboard_model->get_book_list($config["per_page"], $data['page']);
        $data['pagination'] = $this->pagination->create_links();
        $data['main_view'] = 'Student/catalogue_view';
		$this->load->view('template', $data);
		
	}

}