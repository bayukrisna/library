<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
			$data['main_view'] = 'calendar_view';
			$this->load->view('template', $data);
		// }
	}
}