<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_periode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('daftar_ulang_model');
	}

	public function index()
	{
			$data['main_view'] = 'akademi/setting_periode_view';
			$this->load->view('template', $data);
		// }
	}
	public function tambah_periode()
	{
			$data['getProdi'] = $this->daftar_ulang_model->getProdi();
			$data['main_view'] = 'akademi/tambah_periode_view';
			$this->load->view('template', $data);
		// }
	}
}