<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ruang_model');
		$this->load->model('Barang_model');
	}

	public function index()
	{
			$data['getRuang'] = $this->Barang_model->getRuang();
			$data['getKondisi'] = $this->Ruang_model->getKondisi();
			$data['getTipe'] = $this->Barang_model->getTipe();
			$data['barang'] = $this->Barang_model->data_barang();
			$data['main_view'] = 'Barang/barang_view';
			$this->load->view('template', $data);
	}

	public function status()
	{
			$data['status'] = $this->Barang_model->data_status();
			$data['main_view'] = 'Status/status_view';
			$this->load->view('template', $data);
	}

	public function simpan_barang()
	{
			if($this->Barang_model->simpan_barang() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data barang berhasil disimpan </div>');
            	redirect('barang');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang');
		}
	}

	public function simpan_status()
	{
			if($this->Barang_model->simpan_status() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data status berhasil disimpan </div>');
            	redirect('barang/status');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/status');
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