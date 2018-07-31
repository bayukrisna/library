<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anyar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
			$data['main_view'] = 'kelas_perkuliahan';
			$this->load->view('template', $data);
		// }
	}
}