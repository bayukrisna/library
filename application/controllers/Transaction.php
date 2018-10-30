<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaction_model');
		$this->load->model('Master_model');
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
							'label' => $row->userId.' - '.$row->userUsername,
							'id' => $row->userId);
					echo json_encode($result_array);
				
				}
			}
	}
	public function detail_anggota($id_user){
		$data['data'] = $this->Transaction_model->data_user($id_user);
		$data['book'] = $this->Transaction_model->data_book_user($id_user);
		$data['getBook'] = $this->Master_model->getDocument();
		$data['getLocker'] = $this->Master_model->getLocker();
		$data['getCD'] = $this->Master_model->getCD();
		$data['noTrans'] = $this->Transaction_model->buat_kode();
		$data['main_view'] = 'Transaction/detail_anggota_view';
		$this->load->view('template', $data);
	}
	public function simpan_peminjaman($id){
		if($this->Transaction_model->simpan_peminjaman() == TRUE){
				foreach($this->cart->contents() as $item){
		          $data = array(
		          	'transId'    => $this->input->post('transId'),
		            'docId'    => $item['docId'],
		            'cdId'    => $item['cdId'],
		            'lockerId'    => $item['lockerId'],
		            'tdDueDate'    => $item['due_date'],
		            'conditionId' => '1',
		            'tdStatus' => '1'
		          );
		          // $data2 = array(
		          // 	'id_bookstatus'    => '2',
		          // );
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
			$option .= "<option value='".$data->docId."'>".$data->dnNumber."</option>";
			
		}
		echo $option;
	}
	public function add_to_cart()
	{
			$a = count($this->cart->contents())+1;	
			$book_number = $this->input->post('bookNumber');
			$data = array(
			        'id'      => $a,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'buku',
			        'docId' => $book_number,
			        'docNumber' => $this->input->post('id_number'),
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