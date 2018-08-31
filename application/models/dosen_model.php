<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

    

	public function __construct()
	{
		parent::__construct();
	}

	public function data_dosen(){
		return $this->db->join('tb_status_mhs','tb_status_mhs.id_status=tb_dosen.status')
              ->join('tb_status_dosen','tb_status_dosen.id_status_dosen=tb_dosen.jenis_dosen')
              ->join('tb_agama','tb_agama.id_agama=tb_dosen.id_agama')
              ->join('tb_kelamin','tb_kelamin.id_kelamin=tb_dosen.id_kelamin')
              ->get('tb_dosen')
              ->result();
	}

  public function detail_dosen($id_dosen){
    return $this->db->join('tb_status_mhs','tb_status_mhs.id_status=tb_dosen.status')
              ->join('tb_status_dosen','tb_status_dosen.id_status_dosen=tb_dosen.jenis_dosen')
              ->join('tb_agama','tb_agama.id_agama=tb_dosen.id_agama')
              ->join('tb_kelamin','tb_kelamin.id_kelamin=tb_dosen.id_kelamin')
              ->where('id_dosen', $id_dosen)
              ->get('tb_dosen')
              ->row();
  }

	 public function save_dosen()
    {
        $data = array(
            'id_dosen'        => $this->input->post('id_dosen'),
            'nama_dosen'        => $this->input->post('nama_dosen'),
            'kode_dosen'      	=> $this->input->post('kode_dosen'),
            'no_hp'      		=> $this->input->post('no_telepon'),
            'nip'     	=> $this->input->post('nip'),
            'tgl_lahir'       => $this->input->post('tanggal_lahir'),
            'status'       => '1',
            'email'       => $this->input->post('email'),
            'jenis_dosen'       => $this->input->post('jenis_dosen'),
            'id_agama'       => $this->input->post('agama'),
            'id_kelamin'       => $this->input->post('jenis_kelamin'),
            'alamat'       => $this->input->post('alamat'),

        );
    
        $this->db->insert('tb_dosen', $data);

        if($this->db->affected_rows() > 0){
            
                return true;
        } else {
            return false;
            
        }
    }

     public function  buat_kode_dosen()   {
          $this->db->select("MAX(id_dosen)+1 AS id");
          $this->db->from("tb_dosen");
          $query = $this->db->get();

          return $query->row()->id;
    } 

    public function edit_dosen($id_dosen){
    $data = array(
            'id_dosen'        => $this->input->post('id_dosen'),
            'nama_dosen'        => $this->input->post('nama_dosen'),
            'kode_dosen'        => $this->input->post('kode_dosen'),
            'no_hp'         => $this->input->post('no_telepon'),
            'nip'       => $this->input->post('nip'),
            'tgl_lahir'       => $this->input->post('tanggal_lahir'),
            'status'       => '1',
            'email'       => $this->input->post('email'),
            'jenis_dosen'       => $this->input->post('jenis_dosen'),
            'id_agama'       => $this->input->post('agama'),
            'id_kelamin'       => $this->input->post('jenis_kelamin'),
            'alamat'       => $this->input->post('alamat'),
      );

   if (!empty($data)) {
            $this->db->where('id_dosen', $id_dosen)
        ->update('tb_dosen', $data);

          return true;
        } else {
            return null;
        }
  }

	

}

/* End of file dosen_model.php */
/* Location: ./application/models/dosen_model.php */