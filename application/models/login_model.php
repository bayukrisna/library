<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

    public function ceklogin(){
        $query = $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_user.id_jabatan2')
        ->where('username', $this->input->post('username'))
        ->where('password', $this->input->post('password'))
        ->get('tb_user');


        if ($query->num_rows() == 1) {
            $data_pegawai = $query->row();
            $session = array(
                'logged_in' => TRUE,
                'username'       => $data_pegawai->username,
                'password' => $data_pegawai->password,
                'nama' => $data_pegawai->nama,
                'id_jabatan' => $data_pegawai->id_jabatan,
                'nama_jabatan' => $data_pegawai->nama_jabatan,
                'level' => $data_pegawai->level
                );

            $this->session->set_userdata($session);

            return TRUE;
        } else {
            return FALSE;
        }
    }
	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */