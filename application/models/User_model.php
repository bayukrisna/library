<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

    public function create_user()
    {        
        $data = array(
            'userUsername'      => $this->input->post('userUsername', TRUE),
            'sexId'     => $this->input->post('sexId', TRUE),
            'userAddress'     => $this->input->post('userAddress', TRUE),
            'userCity'     => $this->input->post('userCity', TRUE),
            'userEmail'      => $this->input->post('userEmail', TRUE),
            'userPhone'      => $this->input->post('userPhone', TRUE),
            'ucId'      => $this->input->post('ucId', TRUE),
            'campusId' => $this->input->post('campusId', TRUE)
            
        );
        $this->db->insert('user', $data);
        if($this->db->affected_rows() > 0){
                return true;
        } else {
            return false;
        }
    }


     public function data_user(){
     return $this->db->join('sex','sex.id_sex=user.id_sex','left')
                    ->join('user_category','user_category.id_uc=user.id_uc','left')
                    ->join('user_status','user_status.id_us=user_category.id_us','left')
                    ->get('user')
                    ->result();
   }

   public function getUserStatus(){
     return $this->db->get('user_status')
                    ->result();
   }

   public function getCampus(){
     return $this->db->get('campus')
                    ->result();
   }

   public function get_uc_by_us($usId){
     return $this->db->where('usId', $usId)
                    ->get('user_category')
                    ->result();
   }

   public function detail_user($id_user){
      return $this->db->join('sex','sex.id_sex=user.id_sex','left')
                    ->join('user_category','user_category.id_uc=user.id_uc','left')
                    ->join('user_status','user_status.id_us=user_category.id_us','left')
                    ->where('id_user', $id_user)
                    ->get('user')
                    ->row();
   }

   public function edit_user($id_user){
    $data = array(
            'id_sex'  => $this->input->post('id_sex'),
            'address_user'  => $this->input->post('address_user'),
            'city_user'  => $this->input->post('city_user'),
            'email_user'  => $this->input->post('email_user'),
            'no_telp_user'  => $this->input->post('no_telp_user'),
            'id_uc'  => $this->input->post('id_uc'),
      );

    if (!empty($data)) {
            $this->db->where('id_user', $id_user)
        ->update('user', $data);

          return true;
        } else {
            return null;
        }
  }



}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */