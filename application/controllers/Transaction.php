<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaction_model');
		$this->load->model('Master_model');
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect(base_url('login'));
		}
	}
	public function index()
	{
		$this->destroy();
		$data['main_view'] = 'Transaction/anggota_view';
		$this->load->view('template', $data);
			
	}
	public function autocomplete_user(){
		if(isset($_GET['term'])){
				$result = $this->Transaction_model->autocomplete_user($_GET['term']);
				if(count($result) > 0){
					foreach ($result as $row) 
						$result_array[] = array(
							'label' => $row->userStudentId.' - '.$row->userUsername,
							'id' => $row->userId);
					echo json_encode($result_array);
				
				}
			}
	}
	public function detail_anggota($id_user){
		$data['data'] = $this->Transaction_model->data_user($id_user);
		$data['book'] = $this->Transaction_model->data_book_user($id_user);
		$data['getBook'] = $this->Master_model->getDocument();
		$data['getLocker'] = $this->Master_model->getLockerAvailable();
		$data['getCD'] = $this->Master_model->getCD();
		$data['noTrans'] = $this->Transaction_model->buat_kode();
		$data['main_view'] = 'Transaction/detail_anggota_view';
		$this->load->view('template', $data);
	}
	public function simpan_peminjaman($id){
		if($this->Transaction_model->simpan_peminjaman() == TRUE){
				foreach($this->cart->contents() as $item){

				  if($item['filter'] == 'doc'){
		          	$data2 = array('statusId' => '2' );
		          	$col = 'dnId';
		          	$col2 = $item['dnId'];
		          	$this->db->where('dnId', $col2)->update('document_number', $data2);
		          } else if($item['filter'] == 'locker'){
		          	$data2 = array('statusId' => '2' );
		          	$col = 'lockerId';
		          	$col2 = $item['lockerId'];
		          	$this->db->where('lockerId', $col2)->update('locker', $data2);
		          }
		          $data = array(
		          	'transId'    => $this->input->post('transId'),
		          	$col 		=> $col2,
		            'tdDueDate'    => $item['due_date'],
		            'conditionId' => '1',
		            'tdStatus' => '1'
		          );
		          
		          $this->db->insert('transaction_detail', $data);
		          // $this->db->where('no_inventory', $data['no_inventory'])
            // ->update('booknumber', $data2);
		        }
		        $this->destroy();
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Transaction/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Transaction/detail_anggota/'.$id);
		}
	}
	public function simpan_renewal($id){
		if($this->Transaction_model->simpan_renewal() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Transaction/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Transaction/detail_anggota/'.$id);
		}
	}
	public function simpan_return($id, $id2, $id3){
		if($this->Transaction_model->simpan_return($id2, $id3) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Transaction/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Transaction/detail_anggota/'.$id);
		}
	}
	public function simpan_deduct($id){
		if($this->Transaction_model->simpan_deduct() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Transaction/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Transaction/detail_anggota/'.$id);
		}
	}
	public function getBookNumber(){
		$param = $this->input->get('id');
		$result = $this->Transaction_model->getBookNumber($param);
		$option = "";
		
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->dnId."'>".$data->dnNumber."</option>";
			
		}
		echo $option;
	}
	public function add_to_cart()
	{
			$a = count($this->cart->contents())+1;	
			$book_number = $this->input->post('id_number');
			$data = array(
			        'id'      => $a,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'buku',
			        'docId' => $book_number,
			        'dnId' => $this->input->post('dnId'),
			        'cdId' => $this->input->post('cdId'),
			        'lockerId' => $this->input->post('lockerId'),
			        'filter' => $this->input->post('filter'),
			        'due_date' => $this->input->post('due_date'),
			);
			$this->cart->insert($data);
	}
	public function show_cart(){
		print_r($this->cart->contents());
	}
	public function destroy(){
		$this->cart->destroy();
	}
	public function delete_cart($p)	{
		$data = array(
           'rowid' => $p,
           'qty'   => 0
        );
		$this->cart->update($data);
	}
}