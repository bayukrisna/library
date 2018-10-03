<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_model');
	}

	public function index()
	{
			$data['drop_merk'] = $this->Model_model->drop_merk();
			$data['model'] = $this->Model_model->data_model();
			$data['main_view'] = 'Model/model_view';
			$this->load->view('template', $data);
	}

	public function simpan_model()
	{
		$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
			if($this->Model_model->simpan_model($this->upload->data()) == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data Model berhasil disimpan </div>');
            	redirect('model');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('model');
		}
	}
	public function edit_model(){
			$id_model = $this->input->post('id_model');
			$nama_model = $this->input->post('nama_model');
			$config['upload_path'] = './uploads/';
	        $config['allowed_types'] = 'jpg|png|jpeg|pdf';
	        $this->load->library('upload', $config);
	        $this->upload->do_upload('image');
					if ($this->Model_model->edit_model($id_model, $this->upload->data()) == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$nama_model.' berhasil . </div>');
            			redirect('model');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$nama_model.' gagal . </div>');
            			redirect('model');
					}
		} 
}