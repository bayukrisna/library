<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tamu_model');
		$this->load->model('daftar_ulang_model');
		$this->load->model('mahasiswa_model');
	}

	public function index(){
				$data['tamu'] = $this->tamu_model->data_tamu();
				$data['main_view'] = 'Tamu/data_tamu_view';
				$this->load->view('template', $data);
			
		
	}

	public function page_tambah_tamu(){
				$data['kodeunik'] = $this->tamu_model->buat_kode();
				$data['getProdi'] = $this->daftar_ulang_model->getProdi();
				$data['getPreschool'] = $this->daftar_ulang_model->getPreschool();
				$data['mahasiswa'] = $this->mahasiswa_model->data_mahasiswa();
				$data['main_view'] = 'Tamu/tambah_tamu_view';
				$this->load->view('template', $data);

	}

	public function detail_tamu()
	{
			$id_du = $this->uri->segment(3);
			$data['edit'] = $this->tamu_model->detail_tamu($id_du);
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['getPreschool'] = $this->daftar_ulang_model->getPreschool();
			$data['main_view'] = 'Tamu/detail_tamu_view';
			$this->load->view('template', $data);
	}

	public function detail_out()
	{
			$id_du = $this->uri->segment(3);
			$data['edit'] = $this->tamu_model->detail_tamu($id_du);
			$data['main_view'] = 'Tamu/detail_non_aktif_view';
			$this->load->view('template', $data);
	}

	public function save_tamu()
	{
			if($this->tamu_model->save_tamu() == TRUE){
				$nama_pendaftar = $this->input->post('nama_pendaftar');
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-success"> Data '.$nama_pendaftar.' berhasil didaftarkan. </div>');
            	redirect('tamu');
			} else{
				$this->session->set_flashdata('message', '<div class="col-md-12 alert alert-danger"> Username/password sudah ada. </div>');
            	redirect('tamu');
			} 
	} 

	public function hapus_tamu($id_tamu){
		if ($this->tamu_model->hapus_tamu($id_tamu) == TRUE) {
			$this->session->set_flashdata('message', 'HapusTamu Berhasil');
			redirect('tamu');
		} else {
			$this->session->set_flashdata('message', 'Hapus Tamu Gagal');
			redirect('tamu');
		}
	}


	public function page_upload(){
			$id_pendaftaran = $this->uri->segment(3);
			$data['edit'] = $this->tamu_model->get_tamu_by_id($id_pendaftaran);
			$data['main_view'] = 'Tamu/upload_bukti_view';
			$this->load->view('template', $data);
		
	}


	public function save_bukti_transfer(){
	    $config['upload_path'] = './uploads/';
	    $config['allowed_types'] = 'jpg|png|jpeg|pdf';
	    $this->load->library('upload', $config);

	    if($this->upload->do_upload('bukti_transfer')){
	      if($this->tamu_model->save_bukti_transfer($this->upload->data(), $this->uri->segment(3)) == TRUE){
	        $this->session->set_flashdata('success', 'Upload Bukti Berhasil');
	            redirect('tamu');
	      } else {
	        $this->session->set_flashdata('failed', 'Update foto gagal');
	            redirect('tamu/page_upload');
	      }
	    } else {
	      $this->session->set_flashdata('failed', $this->upload->display_errors());
	        redirect('tamu/page_upload');
	    }
	  } 

	  public function save_edit_tamu(){
      $id_du = $this->uri->segment(3);
          if ($this->tamu_model->save_edit_tamu($id_du) == TRUE) {
            $data['message'] = 'Edit Tamu berhasil';
            redirect('tamu');
          } else {
            $data['main_view'] = 'Tamu/detail_tamu_view';
            $data['message'] = 'mahasiswa/detail_mahasiswa';
            redirect('tamu/detail_tamu_view');
          }
        }

        public function f1(){
        		$id_du = $this->uri->segment(3);
        		$data['main_view'] = 'Tamu/f1_view';
				$data['edit'] = $this->tamu_model->get_tamu_by_id($id_du);
				
				$this->load->view('template', $data);
		
		}

		  public function save_f1(){
      	  $id_du = $this->uri->segment(3);
          if ($this->tamu_model->save_f1($id_du) == TRUE) {
            $data['message'] = 'Tambah Follow Up 1 berhasil';
            redirect('tamu');
          } else {
            $data['main_view'] = 'Tamu/f1_view';
            $data['message'] = 'Tamu/f1_view';
            redirect('tamu/detail_tamu_view');
        	
          }
        }

        public function f2(){
        		$id_du = $this->uri->segment(3);
        		$data['main_view'] = 'Tamu/f2_view';
				$data['edit'] = $this->tamu_model->get_tamu_by_id($id_du);
				
				$this->load->view('template', $data);
		
		}

		  public function save_f2(){
      	  $id_du = $this->uri->segment(3);
          if ($this->tamu_model->save_f2($id_du) == TRUE) {
            $data['message'] = 'Tambah Follow Up 2 berhasil';
            redirect('tamu');
          } else {
            $data['main_view'] = 'Tamu/f2_view';
            $data['message'] = 'Tamu/f2_view';
            redirect('Tamu/f2_view');
          }
        }

        public function f3(){
        		$id_du = $this->uri->segment(3);
        		$data['main_view'] = 'Tamu/f3_view';
				$data['edit'] = $this->tamu_model->get_tamu_by_id($id_du);
				
				$this->load->view('template', $data);
		
		}

		  public function save_f3(){
      	  $id_du = $this->uri->segment(3);
          if ($this->tamu_model->save_f3($id_du) == TRUE) {
            $data['message'] = 'Tambah Follow Up 3 berhasil';
            redirect('tamu');
          } else {
            $data['main_view'] = 'Tamu/f3_view';
            $data['message'] = 'Tamu/f3_view';
            redirect('Tamu/f3_view');
          }
        }

        public function out(){
        		$id_du = $this->uri->segment(3);
        		$data['main_view'] = 'Tamu/out_view';
				$data['edit'] = $this->tamu_model->get_tamu_by_id($id_du);
				$this->load->view('template', $data);
		
		}

		 public function data_out(){
        		$data['main_view'] = 'Tamu/data_non_aktif_view';
				$data['edit'] = $this->tamu_model->data_tamu_out();
				$this->load->view('template', $data);
		
		}

		  public function save_out(){
      	  $id_du = $this->uri->segment(3);
          if ($this->tamu_model->save_out($id_du) == TRUE) {
            $data['message'] = 'Data Sudah Non Aktif';
            redirect('tamu');
          } else {
            $data['main_view'] = 'Tamu/f3_view';
            $data['message'] = 'Gagal ';
            redirect('tamu');
          }
        }

        public function data_sgs(){
				$data['edit'] = $this->tamu_model->data_sgs();
				$data['main_view'] = 'Tamu/sgs_view';
				$this->load->view('template', $data);
			
		
	}

	

		


}

/* End of file master_konsentrasi.php */
/* Location: ./application/controllers/master_konsentrasi.php */