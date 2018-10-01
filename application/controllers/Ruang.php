<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Ruang_model');
	}

	public function index()
	{
			$data['getGedung'] = $this->ruang_model->getGedung();
			$data['getKondisi'] = $this->ruang_model->getKondsi();
			$data['ruang'] = $this->ruang_model->data_ruang();
			$data['main_view'] = 'Ruang/ruang_view';
			$this->load->view('template', $data);
	}

	public function simpan_ruang()
	{
			if($this->ruang_model->simpan_ruang() == TRUE){
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Data ruang berhasil disimpan </div>');
            	redirect('ruang');
			}  else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> '.validation_errors().' </div>');
            	redirect('ruang');
		}
	}

	function getGedung()
    {
        return $this->db->get('tb_gedung')
                    ->result();

    }

    function getKondisi()
    {
        return $this->db->get('tb_kondisi')
                    ->result();

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