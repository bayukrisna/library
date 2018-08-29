<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    

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
                $sess_data['id_mahasiswa'] = $sess->id_mahasiswa;
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
    public function data_user(){
        $this->db->select('*');
        $this->db->from('tb_user');
        $this->db->join('tb_mahasiswa', 'tb_mahasiswa.id_mahasiswa=tb_user.id_mahasiswa', 'left');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_level=tb_user.id_level');
        $query = $this->db->get();
        return $query->result();
    }
     function dropdown_level()
    {
        return $this->db->get('tb_jabatan')
                    ->result();

    }
    public function signup()
    {
        $password = $this->input->post('password', TRUE);
        $hash = $this->bcrypt->hash_password($password);
        $data = array(
            'username'      => $this->input->post('username', TRUE),
            'password'  => $hash,
            'id_level'     => $this->input->post('id_level', TRUE)
        );
    
        $this->db->insert('tb_user', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }

    }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */