<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function user_login()
	{
		$data['site_key'] = '6LcMU20UAAAAACiZUAOaCfw0YDu2rHirY7Z0DjNT';
		$this->load->view('login_view', $data);
	}

	public function login()
	{
		$site_key = '6LdJNXEUAAAAAFTF9Mli1NghDiiTI9doXUlREvh3'; // Diisi dengan site_key API Google reCapthca yang sobat miliki
	    $secret_key = '6LdJNXEUAAAAALJchW37uZx4LTzI4ap9ah7i2_kr'; // Diisi dengan secret_key API Google reCapthca yang sobat miliki
	 
	    $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response='.$_POST['g-recaptcha-response'];
	    $response = @file_get_contents($api_url);
	    $data = json_decode($response, true);
	 
	        if($data['success'])
	            {
	            	$adServer = "10.10.0.1";
	
				    $ldap = ldap_connect($adServer);
				    $username = $_POST['username'];
				    $password = $_POST['password'];

				    $ldaprdn = $username.'@jic.ac.id';

				    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
				    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

				    $bind = @ldap_bind($ldap, $ldaprdn, $password);
				    if ($bind) {
				    	
				        $filter="(sAMAccountName=$username)";
				        $result = ldap_search($ldap,"dc=jic,dc=ac,dc=id",$filter);
				        $info = ldap_get_entries($ldap, $result);
				        foreach ($info as $sesd) {
			                $sess_data2['username'] = $sesd['cn'][0];
			                $userDn = $sesd['memberof'][0];
				            $ss = explode(",",$userDn);
 							$sess_data2['group'] = substr($ss[0],3);
			            }

			            if ($this->db->from('user')->where('userUsername', $sess_data2['username'])->get()->row() == NULL) {
			            	$this->session->set_userdata($sess_data2);
			            	redirect(base_url('user/signup'));
			            } else {
			            	foreach ($info as $sess) {
				        	$kk = $sess['cn'][0];
				        	$user = $this->db->from('user')->where('userUsername', $kk)->get()->row();
				        	$userDn = $sess['memberof'][0];
				            $ss = explode(",",$userDn);
				            
				            $sess_data['logged_in'] = TRUE;
			                $sess_data['username'] = $sess['cn'][0];
			                $sess_data['group'] = substr($ss[0],3);
			                $sess_data['email'] = $sess['mail'][0];
			                $sess_data['userId'] = $user->userId;
			                $sess_data['campusId'] = $user->campusId;
			            }
			            if($sess_data['group'] == 'IT' || $sess_data['group'] == 'ITGroup'){
			            	
			            	//$this->user_model->create_akses($sess_data['id_user']);

			            	$this->session->set_userdata($sess_data);
				            @ldap_close($ldap);
				            redirect(base_url('material/cd'));	
			            } else {
			            	$this->session->set_flashdata('message', '<div class="alert alert-danger"><p>Anda Tidak Mendapatkan Akses </p></div>');
							redirect(base_url('user/user_login'));
			            }
			          }     
				    } else {
				        $this->session->set_flashdata('message', '<div class="alert alert-danger"><p>Username atau Password Salah</p></div>');
						redirect(base_url('user/user_login'));
				    }
	        } else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger"><p> Captcha Gagal</p></div>');
			redirect('login');
		}
		// if($this->user_model->masuk() == TRUE){
		// 				redirect(base_url('dashboard'));
		// 			} else {
		// 				redirect(base_url('login'));
		// 			}
	}

	public function logout(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->session->sess_destroy();
			redirect('user/user_login');
		} else {
			redirect('user/user_login'); 
		}
	}

	public function get_uc_by_us($param = NULL) {
		$usId = $param;
		$result = $this->user_model->get_uc_by_us($usId);
		$option = "";
		$option .= '<option value=""> Choose Cathegory </option>';
		foreach ($result as $data) {
			$option .= "<option value='".$data->ucId."' >".$data->ucCategory."</option>";
		}
		echo $option;

	}

	public function signup()
	{
			$data['getUserStatus'] = $this->user_model->getUserStatus();
			$data['getCampus'] = $this->user_model->getCampus();
			$data['main_view'] = 'User/signup_view';
			$this->load->view('template', $data);
	}

	public function create_user()
		{
				if($this->user_model->create_user() == TRUE){
				$this->session->sess_destroy();
	            redirect('user/user_login'); 
				}
		}
	

}