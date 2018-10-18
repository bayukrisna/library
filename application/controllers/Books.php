<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Books_model');
		$this->load->helper(array('url','download'));
	}
	public function index()
	{
			$data['books'] = $this->Books_model->data_books();
			$data['main_view'] = 'Books/data_books_view';
			$this->load->view('template', $data);
	}

	public function book_detail()
	{
			$id_book = $this->uri->segment(3);
			$abc = $this->Books_model->get_id_number($id_book);
			$data['books'] = $this->Books_model->book_detail($abc->id_number);
			$data['detail'] = $this->Books_model->data_book_detail($abc->id_number);
			$data['getBookstatus'] = $this->Books_model->getBookstatus();
			$data['main_view'] = 'Books/detail_buku_view';
			$this->load->view('template', $data);
	}

	public function add_books(){
		$this->destroy();
		$data['main_view'] = 'Books/tambah_buku_view';
		$data['getCG'] = $this->Books_model->getCG();
		$this->load->view('template', $data);
	}

	public function get_dcg_by_cg($param = NULL){
		$id_cg = $param;
		$result = $this->Books_model->get_dcg_by_cg($id_cg);
		$option = "";
		
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_dcg."'>".$data->detail_cg."</option>";
			
		}
		echo $option;
	}
	public function cek(){
		print_r($this->cart->contents());
	}
	public function destroy(){
		$this->cart->destroy();
	}
	public function add_to_cart()
	{
			$a = count($this->cart->contents())+1;	
			$book_number = $this->input->post('book_number');
			$data = array(
			        'id'      => $a,
			        'qty'     => 1,
			        'price'   => 1,
			        'name'    => 'buku',
			        'book_number' => $book_number,
			);
			$this->cart->insert($data);
			
			$this->show_cart();
		
	}
	public function show_cart(){
			$option = "";
          	$i = 1;
			foreach ($this->cart->contents() as $items) {
				$option .= '<tr>
							<td>'.$i++.'</td>
							<td>'.$items['book_number'].'</td>
							<td> Avaliable </td>
							<td><button  type="button" title="Delete data" class="btn btn-xs btn-danger fa fa-trash-o" onclick="delete_cart(this.value)" value="'.$items['rowid'].'"></button></td>
							</tr>';	
				
				
			}
			
			echo $option;
	}
	public function delete_cart($p)	{
		$data = array(
           'rowid' => $p,
           'qty'   => 0
        );
		$this->cart->update($data);
		$this->show_cart();
	}
	public function simpan_buku()
	{
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
			if($this->Books_model->simpan_buku($this->upload->data()) == TRUE){
				foreach($this->cart->contents() as $item){
		          $data = array(
		            'id_number'    => $this->input->post('id_number'),
		            'book_number'    => $item['book_number'],
		            'id_bookstatus' => '1'
		          );
		          $this->db->insert('booknumber', $data);
		        }
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Model berhasil disimpan </div>');
            	redirect(base_url('books'));	
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect(base_url('books'));	
		}
	}

	public function save_one_book()
	{
		$id_book = $this->uri->segment(3);
			if($this->Books_model->save_one_book() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Add book success </div>');
            	redirect('books/book_detail/'.$id_book);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('books/book_detail/'.$id_book);
		}
	}

	public function delete_checked(){
		$id_book = $this->uri->segment(3);
			foreach ($_POST['id'] as $id) {
				$this->Books_model->delete_checked($id);
			}
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Delete Book Item(s) Success </div>');
			redirect('books/book_detail/'.$id_book);
		}

	public function edit_one_book()
	{
		$id_book = $this->uri->segment(3);
		$no_inventory= $this->uri->segment(4);
			if($this->Books_model->edit_one_book($no_inventory) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Book item(s) edited </div>');
            	redirect('books/book_detail/'.$id_book);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('books/book_detail/'.$id_book);
		}
	}
}