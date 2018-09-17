<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('calendar_model');
		ini_set('display_errors', 0);
		if ($this->session->userdata('logged_in') != TRUE) {
			redirect('login');
		}
	}

	public function index()
	{
		
		$var1 = $this->calendar_model->data();
		foreach ($var1 as $key) {
			$key->waktu_start = date('h:i a', strtotime($key->start));
			$key->waktu_end = date('h:i a', strtotime($key->end));
			$key->tanggal = date('d F Y', strtotime($key->start));
			$cek[] = array('title' => $key->title,
						 'start' => $key->start,
						 'waktu' => $key->waktu_start.' - '.$key->waktu_end,
						 'tanggal' => $key->tanggal,
						 'end' => $key->end,
						 'backgroundColor' => $key->backgroundColor,
						 'description' => $key->description,
						 'url' => '#',
						 // 'url' => 'http://www.mikesmithdev.com/blog/pdf-secure-access-and-log-downloads/',
						 'borderColor' => $key->backgroundColor);
		}
		$cek = json_encode($cek);
		
		$data['calendar'] = $cek;
		$data['aldi'] = 'cek';
		$data['main_view'] = 'modal_calendar';
		$this->load->view('template', $data);
		// }
	}
	function google(){
		$data['main_view'] = 'modal_calendar';
		$this->load->view('template', $data);
	}
	function master_calendar(){
		$data['calendar'] = $this->calendar_model->data();
		$data['main_view'] = 'Calendar/master_calendar';
		$this->load->view('template', $data);
	}
	public function edit_calendar(){
			$title = $this->input->post('title');
					if ($this->calendar_model->edit_calendar() == TRUE) {
						$this->session->set_flashdata('message', '<div class="alert alert-success"> Edit '.$title.' berhasil . </div>');
            			redirect('calendar/master_calendar');
					} else {
						$this->session->set_flashdata('message', '<div class="alert alert-danger"> Edit '.$title.' gagal . </div>');
            			redirect('calendar/master_calendar');
					}
		}
	public function tambah_calendar(){
		$title = $this->input->post('title');
		if($this->calendar_model->tambah_calendar() == TRUE){
			$this->session->set_flashdata('message', '<div class="alert alert-success"> Tambah '.$title.' berhasil . </div>');
            redirect('calendar/master_calendar');
        } else {
        	$this->session->set_flashdata('message', '<div class="alert alert-danger"> Tambah '.$title.' gagal . </div>');
        	redirect('calendar/master_calendar');
        }
	}
	public function hapus_asal_sekolah($id){
		if ($this->calendar_model->hapus_calendar($id) == TRUE) {
			$this->session->set_flashdata('message', '<div class="alert alert-success">Hapus Berhasil</div>');
			redirect('calendar/master_calendar');
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Hapus gagal</div>');
			redirect('calendar/master_calendar');
		}
	}
}