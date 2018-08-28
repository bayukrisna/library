<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index()
	{
		if($this->session->userdata('level') == 1){
			$data['dropdown_level'] = $this->user_model->dropdown_level();
			$data['data_user'] = $this->user_model->data_user();
			$data['main_view'] = 'Admin/tambah_user_view';
			$this->load->view('template', $data);
		} else {
			redirect(base_url('login'));
		}
			
	}

	public function signup()
	{
			if($this->user_model->signup() == TRUE){
				$username = $this->input->post('username');
				$this->session->set_flashdata('message', '<div class="alert alert-success"> Registrasi '.$username.' berhasil didaftarkan. </div>');
            	redirect('admin');
			} else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger"> Username/password sudah ada. </div>');
            	redirect('admin');
			} 
	} 
	public function aldi(){
		$dataa = array('key' => '9de19f4a7b6b15d54af8f41cf18e3236','action' => 'services');
        $hasilnya = $this->uksmm($dataa); 	
        $order = json_decode($hasilnya,true);
        print_r($order);  
	}
	function uksmm($post) {
        $apiServer = 'https://uksmm.com/api/v2';
        $_post = Array();
        if (is_array($post)) {
          foreach ($post as $name => $value) {
            $_post[] = $name.'='.urlencode($value);
          }
        } else {
            $_post = FALSE;
        }
        $method = 'post';
        $ch = curl_init($apiServer);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if($_post !== FALSE){
            curl_setopt($ch, CURLOPT_POST, 1);
        }
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);   
        //curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 1); 
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        if (is_array($post) AND $_post !== FALSE) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, join('&', $_post));
        }

        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        $result = curl_exec($ch);
        if (curl_errno($ch)) { 
            $result = curl_error($ch); 
        } 
        curl_close($ch);
        return $result;
    }
}