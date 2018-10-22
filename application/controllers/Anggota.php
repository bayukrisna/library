<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Anggota_model');
	}
	public function index()
	{
		$this->destroy();
		$data['main_view'] = 'Anggota/anggota_view';
		$this->load->view('template', $data);
			
	}
	public function autocomplete_user(){
		if(isset($_GET['term'])){
				$result = $this->Anggota_model->autocomplete_user($_GET['term']);
				if(count($result) > 0){
					foreach ($result as $row) 
						$result_array[] = array(
							'label' => $row->id_user.' - '.$row->username,
							'id' => $row->id_user);
					echo json_encode($result_array);
				
				}
			}
	}
	public function detail_anggota($id_user){
		$data['data'] = $this->Anggota_model->data_user($id_user);
		$data['book'] = $this->Anggota_model->data_book_user($id_user);
		$data['getBook'] = $this->Anggota_model->getBook();
		$data['noTrans'] = $this->Anggota_model->buat_kode();
		$data['main_view'] = 'Anggota/detail_anggota_view';
		$this->load->view('template', $data);
	}
	public function simpan_peminjaman($id){
		if($this->Anggota_model->simpan_peminjaman() == TRUE){
				foreach($this->cart->contents() as $item){
		          $data = array(
		          	'no_trans_borrowing'    => $this->input->post('no_trans_borrowing'),
		            'no_inventory'    => $item['no_inventory'],
		            'due_date'    => $item['due_date'],
		            'id_bs' => '1'
		          );
		          $data2 = array(
		          	'id_bookstatus'    => '2',
		          );
		          $this->db->insert('detail_of_borrow', $data);
		          $this->db->where('no_inventory', $data['no_inventory'])
            ->update('booknumber', $data2);
		        }
		        $this->destroy();
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Anggota/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Anggota/detail_anggota/'.$id);
		}
	}
	public function simpan_renewal($id){
		if($this->Anggota_model->simpan_renewal() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Anggota/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Anggota/detail_anggota/'.$id);
		}
	}
	public function simpan_return($id, $id2, $id3){
		if($this->Anggota_model->simpan_return($id2, $id3) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Anggota/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Anggota/detail_anggota/'.$id);
		}
	}
	public function simpan_deduct($id){
		if($this->Anggota_model->simpan_deduct() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Success </div>');
            	redirect('Anggota/detail_anggota/'.$id);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('Anggota/detail_anggota/'.$id);
		}
	}
	public function getBookNumber(){
		$param = $this->input->get('id');
		$result = $this->Anggota_model->getBookNumber($param);
		$option = "";
		
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->no_inventory."'>".$data->book_number."</option>";
			
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
			        'no_inventory' => $book_number,
			        'id_number' => $this->input->post('id_number'),
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