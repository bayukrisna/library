<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Supplier_model');
	}

	public function index()
	{
			$data['supplier'] = $this->Supplier_model->data_supplier();
			$data['main_view'] = 'Supplier/supplier_view';
			$this->load->view('template', $data);
	}

	public function tambah_supplier()
	{
			$data['main_view'] = 'Supplier/tambah_supplier_view';
			$this->load->view('template', $data);
	}

	public function simpan_supplier()
	{
			if($this->Supplier_model->simpan_supplier() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data supplier berhasil disimpan </div>');
            	redirect('supplier');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('supplier');
		}
	}


	/*public function edit_lahan(){
			$id_periode = $this->input->post('id_lahan');
					if ($this->ruang_model->edit_periode($id_periode) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$id_periode.' berhasil . </div>');
            			redirect('Lahan');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$id_periode.' gagal . </div>');
            			redirect('Lahan');
					}
		} */
}