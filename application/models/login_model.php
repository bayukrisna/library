<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

    public function masuk() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username',$username);
        $result = $this->getUsers($password);        

        if (!empty($result)) {
            return $result;
        } else {
            return null;
        }
    }
    function getUsers($password) {
        $query = $this->db->get('tb_user');

        if ($query->num_rows() == 1) {
            
            $result = $query->row_array();

            if ($this->bcrypt->check_password($password, $result['password'])) {
                foreach ($query->result() as $sess) {
                $sess_data['logged_in'] = TRUE;
                $sess_data['username'] = $sess->username;
                }
                $this->session->set_userdata($sess_data);
                return $result;
            } else {
                //Wrong password
                return array();
            }

        } else {
            return array();
        }
    }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */