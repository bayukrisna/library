<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}
    public function create_user($username) {
        $query = $this->db->select('*')
                ->from('tb_user')
                ->where('username', $username)
                ->get();
        if ($query->num_rows() != 1)
            {
                $data = array(
                    'username' => $username,
                    'status_user' => '1'
                );
            
                $this->db->insert('tb_user', $data);
                return true;
            }
    }

    public function signup()
    {
        $data = array(
            'username'         => $this->input->post('username'),
            'status_user'      => '1',
        );
    
        $this->db->insert('tb_user', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function data_user(){
     return $this->db->get('tb_user')
                    ->result();
   }

    public function data_user_login(){
     return $this->db->join('tb_user', 'tb_user.id_user=tb_akses.id_user')
                    ->get('tb_akses')
                    ->result();
   }


}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */