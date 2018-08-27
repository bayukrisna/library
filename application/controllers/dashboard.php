<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('dashboard_model');
	}

	public function index()
	{
		if($this->session->userdata('level') == 4){
			$data['dashboard'] = $this->dashboard_model->dashboard_finance();
            $data['main_view'] = 'Finance/dashboard_finance_view';
            $this->load->view('template', $data);
		} else if($this->session->userdata('level') == 3){
            $data['dashboard'] = $this->dashboard_model->dashboard_marketing();
            $data['main_view'] = 'tamu/dashboard_marketing_view';
            $this->load->view('template', $data);
        } else {
			redirect(base_url('login'));
		}
			
	}

}