<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting_periode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
			$data['main_view'] = 'akademi/setting_periode_view';
			$this->load->view('template', $data);
		// }
	}
	public function tambah_periode()
	{
			$data['main_view'] = 'akademi/tambah_periode_view';
			$this->load->view('template', $data);
		// }
	}
}