<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}
    public function create_user($username, $group) {
        $query = $this->db->select('*')
                ->from('tb_user')
                ->where('username', $username)
                ->get();
        if ($query->num_rows() != 1)
            {
                $data = array(
                    'username' => $username,
                    'groupname' => $group,
                    'status_user' => '1'
                );
            
                $this->db->insert('tb_user', $data);
                return true;
            }
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
                $sess_data['level'] = $sess->id_level;
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