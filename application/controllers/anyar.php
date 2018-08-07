<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anyar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('finance_model');
		$this->load->model('biaya_sekolah_model');
	}

	public function index()
	{
		$data['kodeunik'] = $this->finance_model->buat_kode();
		$data['getJenisPembayaran'] = $this->biaya_sekolah_model->getJenisPembayaran();
		$data['products'] = $this->finance_model->all();
		$data['main_view'] = 'cart';
		$this->load->view('template', $data);
	}
	
	public function add_to_cart()
	{
		$ea = $this->uri->segment(3);
		$product_id = $this->input->post('pembayaran');
		$product = $this->finance_model->find($product_id);
		$data = array(
					   'id'      => $this->input->post('pembayaran'),
					   'qty'     => 1,
					   'price'   => $this->input->post('biaya'),
					   'name'    => $this->input->post('nama_mhsa'),
					   'idmhsa'    => $this->input->post('id_mhsa'),
					   'tgl'    => $this->input->post('tanggal_pembayaran'),
					   'pembayaran'    => $product->nama_biaya,
					   'jp'    => $this->input->post('jenis_pembayaran'),
					   'kode'    => $this->input->post('kode_pembayaran')
					);

		$this->cart->insert($data);
		redirect(base_url('finance/detail_pembayaran/'.$ea));
	}
	public function simpan_cart()
	{
			if($this->finance_model->simpan_cart() == TRUE){
            	redirect(base_url('anyar'));
			} 
	}
	public function simpan_pembayaran()
	{
			if($this->finance_model->simpan_pembayaran() == TRUE){
				$this->cart->destroy();
            	redirect(base_url('anyar'));
			} 
	}
	public function cart(){
		// displays what currently inside the cart
		//print_r($this->cart->contents());
		$this->load->view('show_cart');
	}
	
	public function clear_cart()
	{
		$this->cart->destroy();

		$ea = $this->uri->segment(3);
		redirect(base_url('finance/detail_pembayaran/'.$ea));
	}
}


