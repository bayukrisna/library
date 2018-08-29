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
            $var1 = $this->dashboard_model->dashboard_marketing_data();
            $var2 = $this->dashboard_model->dashboard_marketing_data2();
            
            $arr = array();
            foreach ($var1 as $results) {
            $date = date("Y-m", strtotime($results->tanggal_pendaftaran));
            $total_mahasiswa = $this->db->query("SELECT count(*) AS total FROM tb_pendaftaran WHERE tanggal_pendaftaran like '$date%'")->row();
            $arr[] = array(
                   'waktu' => $date,
                   // 'waktu' => $results->tanggal_pendaftaran,
                   'no_telp' => $total_mahasiswa->total
                    );
            }

            $ea = json_encode($arr);
            $arr2 = array();
            foreach ($var2 as $results) {
            $date2 = $results->tanggal_pendaftaran;
            $total_mahasiswa2 = $this->db->query("SELECT count(*) AS total FROM tb_pendaftaran WHERE tanggal_pendaftaran like '$date2%'")->row();
            $arr2[] = array(
                   'waktu' => $results->tanggal_pendaftaran,
                   // 'waktu' => $results->tanggal_pendaftaran,
                   'no_telp' => $total_mahasiswa2->total
                    );
            }

            $ea2 = json_encode($arr2);

            $data['encode'] = $ea;
            $data['encode2'] = $ea2;
            $data['main_view'] = 'tamu/dashboard_marketing_view';
            $this->load->view('template', $data);
        } else if($this->session->userdata('level') == 6){
            $data['dashboard'] = $this->dashboard_model->dashboard_akademik();
            $data['main_view'] = 'Akademi/dashboard_akademik_view';
            $this->load->view('template', $data);
        } else {
			redirect(base_url('login'));
		}
			
	}

}