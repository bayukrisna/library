<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		$data['main_view'] = 'Tracking/tracking_view';
		$this->load->view('template', $data);
	}
	public function show_tracking(){
		$no_inventory = $this->input->post('no_inventory');
		$title = $this->input->post('title');
		$book_number = $this->input->post('book_number');
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId')
						->join('document_number', 'document_number.dnId = transaction_detail.dnId')
						->join('document', 'document.docId = document_number.docId')
						->join('user', 'user.userId = transaction.userId')
						->like('document.docNumber', $no_inventory)
						->like('document.docTitle', $title)
						->like('document_number.dnNumber', $book_number)
						->where('document_number.statusId', '2')
						->where('transaction_detail.tdStatus', '1')
						->get('transaction')
						->result();
                $c = 0;
        foreach ($a as $key) {
			
			$arrayName[] = array(++$c,$key->docTitle,$key->docAuthor,$key->userUsername,$key->transBorrowingDate,$key->tdDueDate,$key->dnNumber);	
		}
		echo json_encode($arrayName);
		$this->db->reconnect();
	}
	public function autocomplete_title(){
		if(isset($_GET['term'])){
				$result = $this->db->select('*')->from('document')->like('docTitle',$_GET['term'])->get()->result();
				if(count($result) > 0){
					foreach ($result as $row) 
						$result_array[] = array(
							'label' => $row->docTitle);
					echo json_encode($result_array);
				
				}
			}
	}
	public function test(){
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId')
						->join('document_number', 'document_number.dnId = transaction_detail.dnId')
						->join('document', 'document.docId = document_number.docId')
						->join('user', 'user.userId = transaction.userId')
						->get('transaction')
						->result();
		print_r($a);
	}
}