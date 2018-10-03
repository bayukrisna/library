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
			$data['kategori'] = $this->Barang_model->data_kategori_barang();
			$data['main_view'] = 'Barang/kategori_barang_view';
			$this->load->view('template', $data);
	}

	public function data_barang()
	{
			$id_kategori = $this->uri->segment(3);
			$data['kategori'] = $this->Barang_model->detail_kategori($id_kategori);
			$data['barang'] = $this->Barang_model->data_barang($id_kategori);
			$data['main_view'] = 'Barang/barang_view';
			$this->load->view('template', $data);
	}

	public function tambah_barang()
	{
			$id_kategori = $this->uri->segment(3);
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['kategori'] = $this->Barang_model->detail_kategori($id_kategori);
			$data['main_view'] = 'Barang/tambah_barang_view';
			$this->load->view('template', $data);
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

	public function get_model_by_merk($param = NULL){
		$id_merk = $param;
		$result = $this->Barang_model->get_model_by_merk($id_merk);
		$option = "";
		$option .= '<option value=""> Pilih Model </option>';
		foreach ($result as $data) {
			$option = 
			$option .= "<option value='".$data->id_model."'>".$data->nama_model."</option>";
			
		}
		echo $option;
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