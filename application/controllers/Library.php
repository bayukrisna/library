<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['main_view'] = 'Library/data_view';
		$this->load->view('template', $data);
			
	}
	

}