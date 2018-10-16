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
<<<<<<< HEAD

	
	/*

	public function data_barang()
	{
			$id_kategori = $this->uri->segment(3);
			$data['kategori'] = $this->Barang_model->detail_kategori($id_kategori);
			$data['barang'] = $this->Barang_model->data_barang($id_kategori);
			$data['main_view'] = 'Barang/barang_view';
			$this->load->view('template', $data);
	}

	public function data_aset()
	{
			$data['barang'] = $this->Barang_model->data_barang_semua();
			$data['main_view'] = 'Barang/data_barang_view';
			$this->load->view('template', $data);
	}

	public function detail_barang()
	{
			$id_barang = $this->uri->segment(3);
			$data['riwayat'] = $this->Barang_model->data_riwayat($id_barang);
			$data['barang'] = $this->Barang_model->detail_barang($id_barang);
			$data['getTipe'] = $this->Barang_model->getTipe();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['pemeliharaan'] = $this->Barang_model->data_pemeliharaan($id_barang);
			$data['berkas'] = $this->Barang_model->data_berkas($id_barang);
			$data['main_view'] = 'Barang/detail_barang_view';
			$this->load->view('template', $data);
	}

	public function page_edit_barang()
	{
			$id_barang = $this->uri->segment(3);
			$data['getLogBarang'] = $this->Barang_model->getLogBarang();
			$data['getPengguna'] = $this->Barang_model->getPengguna();
			$data['getKategori'] = $this->Barang_model->getKategori();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getMerk'] = $this->Barang_model->getMerk();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['barang'] = $this->Barang_model->detail_barang($id_barang);
			$data['main_view'] = 'Barang/edit_barang_view';
			$this->load->view('template', $data);
	}

	public function tambah_barang_by_kategori()
	{
			$id_kategori = $this->uri->segment(3);
			$data['getLogBarang'] = $this->Barang_model->getLogBarang();
			$data['getPengguna'] = $this->Barang_model->getPengguna();
			$data['getKategori'] = $this->Barang_model->getKategori();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getMerk'] = $this->Barang_model->getMerk();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['kategori'] = $this->Barang_model->detail_kategori($id_kategori);
			$data['main_view'] = 'Barang/tambah_barang_view';
			$this->load->view('template', $data);
	}

	public function tambah_barang()
	{
			$data['getLogBarang'] = $this->Barang_model->getLogBarang();
			$data['getPengguna'] = $this->Barang_model->getPengguna();
			$data['getKategori'] = $this->Barang_model->getKategori();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getMerk'] = $this->Barang_model->getMerk();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getStatus'] = $this->Barang_model->getStatus();
			$data['main_view'] = 'Barang/tambah_barang2_view';
			$this->load->view('template', $data);
	}

	public function ldapku(){
		$adServer = "10.10.0.1";
	
				    $ldap = ldap_connect($adServer);
				    $username = 'bayu.krisna';
				    $password = '12345678';

				    $ldaprdn = $username.'@jic.ac.id';

				    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
				    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

				    $bind = @ldap_bind($ldap, $ldaprdn, $password);
				    if ($bind) {
				        $filter="(sAMAccountName=*)";
				        $result = ldap_search($ldap,"dc=jic,dc=ac,dc=id",$filter);
				        $info = ldap_get_entries($ldap, $result);
				        foreach ($info as $sess) {
				        	$tes[] = array('username' =>  $sess['cn'][0]);
			            }
			        }
			        return $tes;

	}

	public function get_merk_by_kategori($param = NULL){
		$id_kategori = $param;
		$result = $this->Barang_model->get_merk_by_kategori($id_kategori);
		$option = "";
		$option .= '<option value=""> Pilih Merk </option>';
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_merk."'>".$data->merk."</option>";
			
		}
		echo $option;
	}

	public function get_model_by_mk(){
		$id_kategori = $this->input->post('id_kategori');
		$id_merk = $this->input->post('id_merk');
		$result = $this->Barang_model->get_model_by_mk($id_merk, $id_kategori);
		$option = "";
		$option .= '<option value=""> Pilih Model </option>';
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_model."'>".$data->nama_model."</option>";
			
		}
		echo $option;
=======
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
			        'book_number' => $book_number
			);
			$this->cart->insert($data);
			
			$this->show_cart();
		
>>>>>>> 8a4cb2094383033596878bb664a24f9ba024f011
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
		          $this->db->insert('booknumber2', $data);
		        }
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Model berhasil disimpan </div>');
            	redirect(base_url('books'));	
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect(base_url('books'));	
		}
	}
}