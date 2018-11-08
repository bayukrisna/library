<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Dashboard_model');

		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}
	
	public function index()
	{
		$a = $this->db->select('count(docId) as mm')
						->where('docId', '1141')
						->where('statusId !=', '3')
						->get('document_number')
						->row();
		$a = $a->mm;
		print_r($a);
    


	}
	public function cek_user(){
		$id_user = '72';
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('transBorrowingDate >=' , '2018-11-07')
                        ->where('transBorrowingDate <=' , '2018-11-09')
                        ->get('transaction')
                        ->result();
         print_r($a);
	}
	public function book_report(){
		$a = $this->db->get('document')->result();
		$c = 0;
		foreach ($a as $key) {
			$mm = $this->db->select('count(docId) as mm')
						->where('docId', $key->docId)
						->where('statusId !=', '3')
						->get('document_number')
						->row();
			$mm = $mm->mm;
			$arrayName[] = array(++$c,$key->docNumber,$key->docClassification,$key->docSubject,$key->docTitle,$key->docAuthor,$key->docPublisher,$key->docPubYear,$key->docIsbn,$mm);	
		}
		
		$a = json_encode($arrayName);
		$data['book'] = $a;
		$data['main_view'] = 'Report/book_report_view';
		$this->load->view('template', $data);
	}
	public function borrowing_report(){
		$a = $this->db->get('document')->result();
		$data['main_view'] = 'Report/borrowing_report_view';
		$this->load->view('template', $data);
	}
	public function return_report(){
		$a = $this->db->get('document')->result();
		$data['main_view'] = 'Report/return_report_view';
		$this->load->view('template', $data);
	}
	public function lost_report(){
		$a = $this->db->get('document')->result();
		$data['main_view'] = 'Report/lost_book_report_view';
		$this->load->view('template', $data);
	}
	public function deduct_report(){
		$a = $this->db->get('document')->result();
		$data['main_view'] = 'Report/deduct_report_view';
		$this->load->view('template', $data);
	}
	public function show_borrowing(){
		$id_user = $this->input->post('userId');
		$start = $this->input->post('start');
		$end = $this->input->post('end');
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('transBorrowingDate >=' , $start)
                        ->where('transBorrowingDate <=' , $end)
                        ->get('transaction')
                        ->result();
                $c = 0;
        foreach ($a as $key) {
			
			$arrayName[] = array(++$c,$key->userUsername,$key->docTitle,$key->conditionId,$key->transBorrowingDate,$key->tdDueDate);	
		}
		echo json_encode($arrayName);
		
	}
	public function show_return(){
		$id_user = $this->input->post('userId');
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->get('transaction')
                        ->result();
                $c = 0;
        foreach ($a as $key) {
			
			$arrayName[] = array(++$c,$key->userUsername,$key->docTitle,$key->conditionId,$key->tdDueDate,$key->tdReturnDate);	
		}
		echo json_encode($arrayName);
		
	}
	public function show_lost(){
		$id_user = $this->input->post('userId');
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('tdStatus', '3')
                        ->get('transaction')
                        ->result();
                $c = 0;
        foreach ($a as $key) {
			
			$arrayName[] = array(++$c,$key->docNumber,$key->docClassification,$key->docSubject,$key->docTitle,$key->docAuthor,$key->docPublisher,$key->docPubYear,$key->docIsbn);	
		}
		echo json_encode($arrayName);
		
	}
	public function show_deduct(){
		$id_user = $this->input->post('userId');
		$a = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('tdStatus', '2')
                        ->get('transaction')
                        ->result();
                $c = 0;
        foreach ($a as $key) {
			
			$arrayName[] = array(++$c,$key->userUsername,$key->docTitle,$key->conditionId,$key->tdNotes);	
		}
		echo json_encode($arrayName);
		
	}
	public function export(){
		$a = $this->input->post('p');
		if($a == null){
			echo 'ss';
		} else {
			echo $a;
		}
	}
	public function export_excel(){
	 header('Content-Type: application/vnd.ms-excel');  
 	 header('Content-disposition: attachment; filename='.rand().'.xls');  
 	echo '<table><thead>
                <tr>
                  <th width="1%">No</th>
                <th>No Inventory</th>
                <th>DDC</th>
                <th>Subject</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>ISBN</th>
                <th>Qty</th>

                </tr>
              </thead>';
        $b = $this->db->get('document')->result();              
		$option = "";
          $i = 1;
		foreach ($b as $a) {
			$mm = $this->db->select('count(docId) as mm')
						->where('docId', $a->docId)
						->where('statusId !=', '3')
						->get('document_number')
						->row();
			$mm = $mm->mm;
			$option .= '<table><tr>
						<td>'.$i++.'</td>
						<td>'.$a->docNumber.'</td>
						<td>'.$a->docClassification.'</td>
						<td>'.$a->docSubject.'</td>
						<td>'.$a->docTitle.'</td>
						<td>'.$a->docAuthor.'</td>
						<td>'.$a->docPublisher.'</td>
						<td>'.$a->docPubYear.'</td>
						<td>'.$a->docIsbn.'</td>
						<td>'.$mm.'</td>
						</tr></table>';
			
		}
	echo $option;
 	echo '</table>';
	 }
	 public function export_borrowing(){
	 header('Content-Type: application/vnd.ms-excel');  
 	 header('Content-disposition: attachment; filename='.rand().'.xls');  
 	echo '<table><thead>
                <tr>
                  <th width="1%">No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Condition</th>
                      <th>Borrow Date</th>
                      <th>Due Date</th>

                </tr>
              </thead>';
        $id_user = $this->uri->segment(3);
		$start = $this->uri->segment(4);
		$end = $this->uri->segment(5);
		$b = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('transBorrowingDate >=' , $start)
                        ->where('transBorrowingDate <=' , $end)
                        ->get('transaction')
                        ->result();
		$option = "";
          $i = 1;
		foreach ($b as $a) {
			$option .= '<table><tr>
						<td>'.$i++.'</td>
						<td>'.$a->userUsername.'</td>
						<td>'.$a->docTitle.'</td>
						<td>'.$a->conditionId.'</td>
						<td>'.$a->transBorrowingDate.'</td>
						<td>'.$a->tdDueDate.'</td>
						</tr></table>';
			
		}
	echo $option;
 	echo '</table>';
	 }
	 public function export_return(){
	 header('Content-Type: application/vnd.ms-excel');  
 	 header('Content-disposition: attachment; filename='.rand().'.xls');  
 	echo '<table><thead>
                <tr>
                  <th width="1%">No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Condition</th>
                      <th>Due Date</th>
                      <th>Return Date</th>

                </tr>
              </thead>';
        $id_user = $this->uri->segment(3);
		$b = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->get('transaction')
                        ->result();
		$option = "";
          $i = 1;
		foreach ($b as $a) {
			$option .= '<table><tr>
						<td>'.$i++.'</td>
						<td>'.$a->userUsername.'</td>
						<td>'.$a->docTitle.'</td>
						<td>'.$a->conditionId.'</td>
						<td>'.$a->tdDueDate.'</td>
						<td>'.$a->tdReturnDate.'</td>
						</tr></table>';
			
		}
	echo $option;
 	echo '</table>';
	 }
	 public function export_lost(){
	 header('Content-Type: application/vnd.ms-excel');  
 	 header('Content-disposition: attachment; filename='.rand().'.xls');  
 	echo '<table><thead>
                <tr>
                  <th width="1%">No</th>
                <th>No Inventory</th>
                <th>DDC</th>
                <th>Subject</th>
                <th>Title</th>
                <th>Author</th>
                <th>Publisher</th>
                <th>Publication Year</th>
                <th>ISBN</th>

                </tr>
              </thead>';
        $id_user = $this->uri->segment(3);
		$b = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('tdStatus', '3')
                        ->get('transaction')
                        ->result();
		$option = "";
          $i = 1;
		foreach ($b as $a) {
			$option .= '<table><tr>
						<td>'.$i++.'</td>
						<td>'.$a->docNumber.'</td>
						<td>'.$a->docClassification.'</td>
						<td>'.$a->docSubject.'</td>
						<td>'.$a->docAuthor.'</td>
						<td>'.$a->docPublisher.'</td>
						<td>'.$a->docPubYear.'</td>
						<td>'.$a->docIsbn.'</td>
						</tr></table>';
			
		}
	echo $option;
 	echo '</table>';
	 }
	 public function export_deduct(){
	 header('Content-Type: application/vnd.ms-excel');  
 	 header('Content-disposition: attachment; filename='.rand().'.xls');  
 	echo '<table><thead>
                <tr>
                  <th width="1%">No</th>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Condition</th>
                      <th>Notes</th>

                </tr>
              </thead>';
        $id_user = $this->uri->segment(3);
		$b = $this->db->join('transaction_detail', 'transaction_detail.transId = transaction.transId', 'left')
                        ->join('document_number', 'document_number.dnId = transaction_detail.dnId', 'left')
                        ->join('document', 'document.docId = document_number.docId', 'left')
                        ->join('cd', 'cd.cdId = transaction_detail.cdId', 'left')
                        ->join('locker', 'locker.lockerId = transaction_detail.lockerId', 'left')
                        ->join('user', 'user.userId = transaction.userId', 'left')
                        ->where('transaction.userId', $id_user)
                        ->where('tdStatus', '2')
                        ->get('transaction')
                        ->result();
		$option = "";
          $i = 1;
		foreach ($b as $a) {
			$option .= '<table><tr>
						<td>'.$i++.'</td>
						<td>'.$a->userUsername.'</td>
						<td>'.$a->docTitle.'</td>
						<td>'.$a->conditionId.'</td>
						<td>'.$a->tdNotes.'</td>
						</tr></table>';
			
		}
	echo $option;
 	echo '</table>';
	 }
}