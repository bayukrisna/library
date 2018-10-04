<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ruang_model');
		$this->load->model('Barang_model');
		$this->load->helper(array('url','download'));
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

	public function detail_barang()
	{
			$id_barang = $this->uri->segment(3);
			$data['barang'] = $this->Barang_model->detail_barang($id_barang);
			$data['getTipe'] = $this->Barang_model->getTipe();
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['pemeliharaan'] = $this->Barang_model->data_pemeliharaan($id_barang);
			$data['berkas'] = $this->Barang_model->data_berkas($id_barang);
			$data['main_view'] = 'Barang/detail_barang_view';
			$this->load->view('template', $data);
	}

	public function tambah_barang()
	{
			$id_kategori = $this->uri->segment(3);
			$data['getSupplier'] = $this->Barang_model->getSupplier();
			$data['getPerusahaan'] = $this->Barang_model->getPerusahaan();
			$data['getRuang'] = $this->Barang_model->getRuang();
			$data['getStatus'] = $this->Barang_model->getStatus();
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
		$id_kategori = $this->uri->segment(3);
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        $this->upload->do_upload('foto_barang');
			if($this->Barang_model->simpan_barang($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Barang berhasil disimpan </div>');
            	redirect('barang/tambah_barang/'.$id_kategori);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/tambah_barang/'.$id_kategori);
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

	public function simpan_pemeliharaan()
	{
		$id_barang = $this->uri->segment(3);
			if($this->Barang_model->simpan_pemeliharaan() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data pemeliharaan berhasil disimpan </div>');
            	redirect('barang/detail_barang/'.$id_barang);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/detail_barang/'.$id_barang);
		}
	}

	public function simpan_berkas()
	{
		$id_barang = $this->uri->segment(3);
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|zip|rar|pdf|doc|docx|txt|gif';
        $this->load->library('upload', $config);
        $this->upload->do_upload('nama_berkas');
			if($this->Barang_model->simpan_berkas($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Berkas berhasil disimpan </div>');
            	redirect('barang/detail_barang/'.$id_barang);
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('barang/detail_barang/'.$id_barang);
		}
	}

	public function download_berkas(){				
		force_download('uploads/'.$this->uri->segment(3),NULL);
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